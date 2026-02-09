<!DOTYPE html>
<html>
<head>
    <meta charsel="utf-8"
    <title>Kalkulator</title>
</head>

<body>
    
     <form action="" method="post">
         Angka 1 <input type="text" name="angka1"> <br>
         Angka 2 <input type="text" name="angka2"> <br>
         Operator <select name="operator">
             <option value="+">+</option>
             <option value="-">-</option>
             <option value="*">*</option>
             <option value="/">/</option>
          </select>
     <button type="submit" name="eksekusi">eksekusi</button>
</form>


       <?php
       $hasil='';
         if(isset($_POST['eksekusi'])){
            $angka1=$_POST['angka1'];
            $angka2=$_POST['angka2'];
            $operator=$_POST['operator'];
            

           //penjumlahan
           if ($operator =="+") {
               $hasil = $angka1 + $angka2;

    }

           //pengurangan
           else if ($operator =="-")  {
               $hasil = $angka1 - $angka2;

    }
 
           //perkalian
           else if ($operator =="*")  {
              $hasil = $angka1 * $angka2;

    }

           //pembagian
           else if ($operator =="/")  {
             $hasil = $angka1 / $angka2;

    }
         } 
    echo "<br>";
    echo "= $hasil";
    
    

?>
</body>
</html>