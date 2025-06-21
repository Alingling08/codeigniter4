<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LeadsModel;
use CodeIgniter\HTTP\ResponseInterface;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

use Dompdf\Dompdf;
use Dompdf\Options;

class AdminCRMController extends BaseController
{
    protected $helpers = ['file', 'download'];
    public function index()
    {
        $data = [
            'pageTitle' => 'CRM Dashboard | ' . env('COMPANY_NAME')
        ];

        return view('pages/crm/dashboard', $data);
    }

    public function addContact()
    {
        $data = [
            'pageTitle' => 'Add Contact | CRM | ' . env('COMPANY_NAME')
        ];

        return view('pages/crm/add-contact', $data);
    }

    public function downloadLeadsCSV()
    {

        $filename = 'leads_' . date('Ymd') . '.csv';
        header("Content-Description:File Transfer");
        header("Content-Disposition: attachment;filename=$filename");
        header("Content-Type:application/csv");

        //Get Data
        $leadModel = new LeadsModel();
        $leads = $leadModel->fetchAllLeads();

        // Build CSV content in memory
        $handle = fopen('php://temp', 'r+');

        // Add header
        fputcsv($handle, [
            'ID',
            'First Name',
            'Last Name',
            'Email',
            'Phone',
            'Company',
            'Source',
            'Status',
            'Notes',
            'Assigned To',
            'Created At',
            'Updated At',
            'Deleted At'
        ]);
        // // Add data rows
        foreach ($leads as $lead) {
            fputcsv($handle, [
                $lead['id'],
                $lead['first_name'],
                $lead['last_name'],
                $lead['email'],
                $lead['phone'],
                $lead['company'],
                $lead['source'],
                $lead['status'],
                $lead['notes'],
                $lead['assigned_to'],
                $lead['created_at'],
                $lead['updated_at'],
                $lead['deleted_at'],
            ]);
        }

        // Rewind and get contents
        rewind($handle);
        $csvData = stream_get_contents($handle);
        fclose($handle);

        // Use CI's download response
        return $this->response->download($filename, $csvData)->setFileName($filename);
    }

    public function downloadLeadsEXCEL()
    {
        //Get Data
        $leadModel = new LeadsModel();
        $leads = $leadModel->fetchAllLeads();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set header
        $header = [
            'ID',
            'First Name',
            'Last Name',
            'Email',
            'Phone',
            'Company',
            'Source',
            'Status',
            'Notes',
            'Assigned To',
            'Created At',
            'Updated At',
            'Deleted At'
        ];

        $sheet->fromArray($header, null, 'A1');

        // Fill data starting from second row
        $row = 2;
        foreach ($leads as $lead) {
            $sheet->fromArray([
                $lead['id'],
                $lead['first_name'],
                $lead['last_name'],
                $lead['email'],
                $lead['phone'],
                $lead['company'],
                $lead['source'],
                $lead['status'],
                $lead['notes'],
                $lead['assigned_to'],
                $lead['created_at'],
                $lead['updated_at'],
                $lead['deleted_at'],
            ], null, 'A' . $row);
            $row++;
        }

        // Write the file to memory
        $writer = new Xlsx($spreadsheet);
        $filename = 'leads_' . date('Ymd_His') . '.xlsx';

        // Set headers for download
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header("Content-Disposition: attachment; filename=\"$filename\"");
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
        exit;
    }

    public function downloadLeadsPDF()
    {
        //Get Data
        $leadModel = new LeadsModel();
        $leads = $leadModel->fetchAllLeads();

        // Load view as HTML string
        $html = view('reports/pdf/leads_report', ['leads' => $leads]);

        // Set options
        $options = new Options();
        $options->set('isRemoteEnabled', true);
        $dompdf = new Dompdf($options);

        // Load HTML
        $dompdf->loadHtml($html);

        // Set paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render and stream PDF
        $dompdf->render();
        $dompdf->stream('crm_leads_' . date('Ymd_His') . '.pdf', ['Attachment' => true]);
        exit;
    }
}
