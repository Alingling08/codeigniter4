<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>CRM Leads Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 10px;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 5px;
            text-align: left;
        }

        th {
            background-color: #f0f0f0;
        }
    </style>
</head>

<body>
    <h2>CRM Leads Report</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>First</th>
                <th>Last</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Company</th>
                <th>Source</th>
                <th>Status</th>
                <th>Notes</th>
                <th>Assigned</th>
                <th>Created</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($leads as $lead): ?>
                <tr>
                    <td><?= $lead['id'] ?></td>
                    <td><?= esc($lead['first_name']) ?></td>
                    <td><?= esc($lead['last_name']) ?></td>
                    <td><?= esc($lead['email']) ?></td>
                    <td><?= esc($lead['phone']) ?></td>
                    <td><?= esc($lead['company']) ?></td>
                    <td><?= esc($lead['source']) ?></td>
                    <td><?= esc($lead['status']) ?></td>
                    <td><?= esc($lead['notes']) ?></td>
                    <td><?= esc($lead['assigned_to']) ?></td>
                    <td><?= $lead['created_at'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>