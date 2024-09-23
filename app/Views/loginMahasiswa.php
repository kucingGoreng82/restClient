<!DOCTYPE html>
<html lang="en">
<head>
    <title>Input Data Mahasiswa</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label, select, input[type="text"] {
            display: block;
            margin-bottom: 10px;
            width: 100%;
        }
        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form action="/proses" method="post">
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required>

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="status">Status Kelulusan:</label>
        <select id="status" name="status" required>
            <option value="Lulus">Lulus</option>
            <option value="Tidak Lulus">Tidak Lulus</option>
        </select>

        <input type="submit" value="Submit Data">
    </form>
</body>
</html>
