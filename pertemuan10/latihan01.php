<!DOCTYPE html>
<Mhtml lang ="en">
    <head>
        <meta charset = "UTF-8">
        <meta http - equiv = "X-UA-Compatible" content="IE=edge">
        <meta name="viewport"content="width=device-width,inital-scale=1.0">
        <title>Document</title>
</head>
<body>

<from name="latihan1" method="POST" onsubmit="retrun checkfrom(this)">
     <div>
        NIM
        <inout type="text" id="txNIM" name="NIM">
</div>
<div>
       NAMA
        <inout type="text" id="txNAMA" name="NAMA">
</div>
<div>
     jenis kelamin
     <input tyoe="radio" id="txJKEL" name="JKEL" value="L">laki-laki
     <input tyoe="radio" id="txJKEL" name="JKEL" value="p">Perempuan
     </div>
     </div>
     jurusan
     <select name="JURUSAN" id="txJUR">
       <option value="MTI">MTI</option>
       <option value="SK">SK</option>
       <option value="KAB">KAB</option>
       <option value="DKV">DKV</option>
       <option value="TIPAR">TIPAR</option>
    </select>
    </div>
     </div>
     Hobi
     <input type="checkbox" name="hobi_1">jalan-jalan
     <input type="checkbox" name="hobi_2">motor clasik
     <input type="checkbox" name="hobi_3">ngetrhif
     </div>
     </div>
     
     <button type="sumbit"> Kirim Data </button>
  </div>
</from>

<script>
     function checkfrom(frm){
        let f = frm.elements;

        let nim = F .nameditam("NIM").value;

        consol.log("NIM"+ nim);



        retrun false;
     }
     </script>
</body>
</html>