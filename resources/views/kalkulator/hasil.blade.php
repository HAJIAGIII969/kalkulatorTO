<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h1{
        font-size:32px;
        font-weight:bold;
        color:blue;
        margin-top:20px;
        margin-bottom:20px;
        
    }
    body{
        margin:0;
        background-color:black;
        background-image:linear-gradient(to right,red,white);
        
    }
    form{
        width:400px;
        margin:0 auto;
        padding:20px;
        border:1px;
        border-radius:8px;
        background-color:purple;

    }
    input[type="submit"]{
        width: 100%;
        padding: 25px 40px;
        font-size:large;
        background-color:blue;
        color:black;
        border:none;
        border-radius:10px;
        box-shadow:5px 5px 5px rgba(red,green,blue,alpha);
        outline-color:black;
        border:1px solid black;
        
        
    }
</style>
<body>
    <h1><center>KALKULATOR TO</center></h1>
    <center>
        <form action="{{ route('proses.store') }}" method="post">
            @csrf
            <table border=1 width=400>
                <tr>
                    <td colspan=2><input type="number" name="a" method="post"></td>
                    <td colspan=2 rowspan=2><input type="submit" value="Reset" name="op"></td>
                    
                </tr>
                <tr>
                    <td colspan=2><input type="number" name="b" method="post"></td>
                  
                    
                </tr>
                <tr>
                    <td colspan=4>Hasil : <input type="textfield" name="hasil" value="{{ $hasil }}" id=""></td>
                  
                </tr>
                <tr>
                    <td><input type="submit" value="+" name="op"></td>
                    <td><input type="submit" value="-" name="op"></td>
                    <td><input type="submit" value="x" name="op"></td>
                    <td><input type="submit" value="/" name="op"></td>
                </tr>
                <tr>
                    <td colspan="4">
                        Nama : Haggie Auberta<br>
                        Kelas: XII PPLG 2</br>
                        TO

                </tr>

    </center>
</body>
</html>