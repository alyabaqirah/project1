<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $month = htmlspecialchars($_POST['month']);
    $year = htmlspecialchars($_POST['year']);
    $employeeid = htmlspecialchars($_POST['employeeid']);
    $basicsalary = htmlspecialchars($_POST['basicsalary']);
    $deduction = htmlspecialchars($_POST['deduction']);
    $overtime = htmlspecialchars($_POST['overtime']);
    $kwsp = htmlspecialchars($_POST['kwsp']);
    $allowance = htmlspecialchars($_POST['allowance']);
    $perkeso = htmlspecialchars($_POST['perkeso']);

    $hourlyRate = $basicsalary / 208;
    $overtimePay = $hourlyRate * 1.5 * $overtime;
    $grossSalary = $basicsalary + $overtimePay + $allowance;
    $netSalary = $grossSalary - $deduction - $kwsp - $perkeso;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generated Invoice</title>
    <style>
        body {
            background-color: #f8f8f8;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .invoice-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 800px;
            max-width: 100%;
        }

        .invoice-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .invoice-header img {
            width: 150px;
        }

        .invoice-header div {
            text-align: right;
        }

        .invoice-details, .bill-to, .itemized-list, .invoice-summary, .invoice-footer {
            margin-bottom: 20px;
        }

        .invoice-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .invoice-details table, .bill-to table, .itemized-list table, .invoice-summary table {
            width: 100%;
            border-collapse: collapse;
        }

        .invoice-details th, .invoice-details td, .bill-to th, .bill-to td, .itemized-list th, .itemized-list td, .invoice-summary th, .invoice-summary td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .itemized-list th {
            background-color: #f2f2f2;
        }

        .invoice-footer {
            text-align: center;
            font-size: 12px;
            color: #666;
        }

        .back-button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            margin: 0 auto;
            width: 100px;
        }
    </style>
</head>
<body>
    <div class="invoice-container">
        <div class="invoice-header">
            <img src="logomitc.png" alt="Logo">
            <div>
                <h2>Invoice</h2>
                <p><strong>Date:</strong> <?php echo date("d/m/Y"); ?></p>
                <p><strong>Invoice #:</strong> <?php echo uniqid(); ?></p>
            </div>
        </div>
        <div class="invoice-details">
            <div class="invoice-title">Invoice Details</div>
            <table>
                <tr>
                    <th>Employee ID</th>
                    <td><?php echo $employeeid; ?></td>
                </tr>
                <tr>
                    <th>Month</th>
                    <td><?php echo $month; ?></td>
                </tr>
                <tr>
                    <th>Year</th>
                    <td><?php echo $year; ?></td>
                </tr>
            </table>
        </div>
        <div class="itemized-list">
            <div class="invoice-title">Itemized List</div>
            <table>
                <thead>
                    <tr>
                        <th>Description</th>
                        <th>Amount (RM)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Basic Salary</td>
                        <td><?php echo number_format($basicsalary, 2); ?></td>
                    </tr>
                    <tr>
                        <td>Overtime Pay</td>
                        <td><?php echo number_format($overtimePay, 2); ?></td>
                    </tr>
                    <tr>
                        <td>Allowance</td>
                        <td><?php echo number_format($allowance, 2); ?></td>
                    </tr>
                    <tr>
                        <td>Deduction</td>
                        <td><?php echo number_format($deduction, 2); ?></td>
                    </tr>
                    <tr>
                        <td>KWSP</td>
                        <td><?php echo number_format($kwsp, 2); ?></td>
                    </tr>
                    <tr>
                        <td>PERKESO</td>
                        <td><?php echo number_format($perkeso, 2); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="invoice-summary">
            <div class="invoice-title">Summary</div>
            <table>
                <tr>
                    <th>Gross Salary</th>
                    <td><?php echo number_format($grossSalary, 2); ?></td>
                </tr>
                <tr>
                    <th>Net Salary</th>
                    <td><?php echo number_format($netSalary, 2); ?></td>
                </tr>
            </table>
        </div>
        <div class="invoice-footer">
            <p>Thank you for your hard work!</p>
            <p>Please make payment by the due date.</p>
        </div>
        <button class="back-button" onclick="window.history.back();">Back</button>
    </div>
</body>
</html>
