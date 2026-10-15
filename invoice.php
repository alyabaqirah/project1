<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&family=Cinzel+Decorative:wght@400;700;900&family=Rammetto+One&display=swap" rel="stylesheet">

    <style>
        body {
            background-image: url('background.jpg');
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            font-family: 'Times New Roman', serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding: 10px 20px;
            background-color: rgba(0, 0, 0, 0.1);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .logo {
            width: 150px;
            height: auto;
            position: absolute;
            left: 20px;
        }

        .nav {
            display: flex;
            justify-content: center;
            width: 100%;
        }

        .nav a {
            margin: 0 10px;
            padding: 10px 15px;
            font-size: 20px;
            color: black;
            text-decoration: none;
            border-radius: 5px;
        }

        .nav a.active {
            font-weight: bold;
            text-decoration: underline;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #BD9FB6;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            width: 70%;
        }

        .profile-header {
            display: flex;
            justify-content: center;
            width: 100%;
        }

        .profile-header h1 {
            font-family: "Cinzel Decorative", serif;
            text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px  1px 0 #000, 2px  5px 0 #000;
            margin-bottom: 50px;
            color: #FFC0CB;
        }

        .profile-content {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            width: 100%;
        }

        .profile-details {
            display: flex;
            flex-direction: column;
            width: 100%;
            max-width: 800px;
        }

        .detail-item {
            margin: 10px 0;
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            line-height: 1.2; /* Closer line spacing */
        }

        .detail-label {
            width: 200px;
            font-weight: bold;
        }

        .detail-input {
            width: calc(100% - 220px);
            height: 30px;
            background-color: white;
            border: none;
            border-radius: 10px;
            padding: 5px;
            color: black;
        }

        .special-input { /* Special styling for certain inputs */
            background-color: #E1D1B4;
        }

        .center-row {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        .row {
            display: flex;
            justify-content: space-between;
            width: 100%;
            gap: 20px;

        }

        .row .detail-item {
            width: 48%;
            margin-right: 60px;
        }

        .button-container {
            display: flex;
            justify-content: space-around;
            width: 100%;
            margin-top: 20px;
            margin-bottom: 80px;
        }

        .button {
            background-color: #add8e6;
            color: black;
            border-radius: 50px;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 18px;
        }

        h2 {
            font-family: 'Papyrus', fantasy;
            color: black;
            font-size: 20px;
            margin-bottom: 10px;
            vertical-align: bottom;
            display:inline;
            background-color: rgba(0, 0, 0, 0.1);
            padding: 0px;
        }

        .vertical-text {
            position: absolute;
            right: 0;
            top: 110%;
            transform: translateY(-50%) rotate(90deg);
            transform-origin: right top;
            font-size: 20px;
            font-weight: bold;
        }

        .vertical-text a {
            text-decoration: none;
            color: black;
        }

        .section-space {
          margin-bottom: 50px; /* Adjust the margin as needed */
      }

            .input-box {
            border: 2px solid #E1D9CE; /* Border style */
            border-radius: 10px; /* Rounded corners */
            padding: 10px; /* Padding inside the box */
            margin-bottom: 20px; /* Spacing between this box and the next section */ 
            background-color: #E1D9CE;
            width: 50 px;
        }

        .detail-item.allowance-perkeso {
            margin-bottom: 80px; /* Adjust as needed */
        }


}




    </style>
</head>
<body>
    <div class="header">
        <img src="logomitc.png" alt="Logo" class="logo">
        <div class="nav">
             <a href="adminMenu.php">Menu</a>
            <a href="adminProfile.php">Profile</a>
            <a href="employeeDetails.php">Add Employee</a>
            <a href="searchemployee.php">Employee Details</a>
             <a href="department.php">Department</a>
            <a href="position.php">Position</a>
            <a href="invoice.php" class="active">Payroll</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>

    <div class="container">
        <div class="profile-header">
            <h1>PAYROLL</h1>
        </div>
        <form id="invoiceForm" action="generateinvoice.php" method="POST">
            <div class="center-row">
                <div class="input-box">

                <div class="detail-item">
                    <div class="detail-label">Month:</div>
                    <input type="text" id="month" name="month" class="detail-input" required placeholder="Enter Month">
                </div>
                <div class="detail-item">
                    <div class="detail-label">Year:</div>
                    <input type="text" id="year" name="year" class="detail-input" required placeholder="Enter Year">
                </div>
                <div class="detail-item">
                    <div class="detail-label">Employee ID:</div>
                    <input type="text" id="employeeid" name="employeeid" class="detail-input" required placeholder="Enter Employee ID">
                </div>
                </div>


            <div class="section-space"></div>

            <div class="row">
                <div class="detail-item">
                    <div class="detail-label">Basic Salary:</div>
                    <input type="number" id="basicsalary" name="basicsalary" class="detail-input" required placeholder="Enter Basic Salary">
                </div>
                <div class="detail-item">
                    <div class="detail-label">Deduction:</div>
                    <input type="number" id="deduction" name="deduction" class="detail-input" required placeholder="Enter Deduction">
                </div>
            </div>
            <div class="row">
                <div class="detail-item">
                    <div class="detail-label">Overtime Hours:</div>
                    <input type="number" id="overtime" name="overtime" class="detail-input" required placeholder="Enter Overtime Hours">
                </div>
                <div class="detail-item">
                    <div class="detail-label">KWSP:</div>
                    <input type="number" id="kwsp" name="kwsp" class="detail-input" required placeholder="Enter KWSP">
                </div>
            </div>
            <div class="row">
                <div class="detail-item allowance-perkeso">
                    <div class="detail-label">Allowance:</div>
                    <input type="number" id="allowance" name="allowance" class="detail-input" required placeholder="Enter Allowance">
                </div>
                <div class="detail-item allowance-perkeso">
                    <div class="detail-label">PERKESO:</div>
                    <input type="number" id="perkeso" name="perkeso" class="detail-input" required placeholder="Enter PERKESO">
                </div>
            </div>
            <div class="center-row">
                <div class="detail-item">
                    <div class="detail-label">GROSS SALARY:</div>
                    <span id="grosssalary" class="detail-output">0.00</span>
                </div>
                <div class="detail-item">
                    <div class="detail-label">NET SALARY:</div>
                    <span id="netsalary" class="detail-output">0.00</span>
                </div>
            </div>
            <div class="button-container">
                <div>
                    <button class="button" type="button" onclick="calculateSalaries()">CALCULATE</button>
                </div>
                <div>
                    <button class="button" type="submit" name="generateinvoice">GENERATE INVOICE</button>
                </div>
            </div>
        </form>
    </div>
    <div class="container2">
        <h2>"YOUR ULTIMATE GATEWAY TO MELAKA"</h2>
    </div>
    <div class="vertical-text">
        @mitchotel. @mitchotel. @mitchotel.@mitchotel. @mitchotel. @mitchotel. @mitchotel. @mit
    </div>
    <script>
        function calculateSalaries() {
            const basicSalary = parseFloat(document.getElementById('basicsalary').value) || 0;
            const overtimeHours = parseFloat(document.getElementById('overtime').value) || 0;
            const allowance = parseFloat(document.getElementById('allowance').value) || 0;
            const deduction = parseFloat(document.getElementById('deduction').value) || 0;
            const kwsp = parseFloat(document.getElementById('kwsp').value) || 0;
            const perkeso = parseFloat(document.getElementById('perkeso').value) || 0;

            const hourlyRate = basicSalary / 208; // Assuming 26 working days in a month, 8 hours per day
            const overtimePay = hourlyRate * 1.5 * overtimeHours;

            const grossSalary = basicSalary + overtimePay + allowance;
            const netSalary = grossSalary - deduction - kwsp - perkeso;

            document.getElementById('grosssalary').textContent = grossSalary.toFixed(2);
            document.getElementById('netsalary').textContent = netSalary.toFixed(2);
        }
    </script>
</body>
</html>

