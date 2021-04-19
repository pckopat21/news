
<html>
<head>
    <title> &nbsp; </title>
</head>
<body bgcolor="white" text="black" link="blue" vlink="purple" alink="red">
<table border="0" cellpadding="0" cellspacing="0" width="1060" height="auto">
    <tr>
        <td width="1060" height="100">
            <p align="center"><b><font face="Times New Roman"><span style="font-size:16pt;">T.C.<br>
ULAŞTIRMA VE ALTYAPI BAKANLIĞI<br>
KARAYOLLARI GENEL MÜDÜRLÜĞÜ<br>
5. Bölge Müdürlüğü<br>
</span></font></b><font size="4"></font></p>
        </td>
    </tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" width="1060" height="43">
    <tr>
        <td width="1060" height="43">
            <p align="center"><b><font face="Times New Roman"><span style="font-size:16pt;">MEMUR İZİN FORMU</span></font></b><font size="4"></font></p>
        </td>
    </tr>
</table>
<table border="2" bordercolor="black" cellpadding="0" cellspacing="0" width="1066" height="972">
    <tr>
        <td width="1060" height="457">
            <table border="0" cellpadding="0" cellspacing="0" width="1062" height="412">
                <tr>
                    <td width="46" height="29"><b>&nbsp;SAYI</b></td>
                    <td width="91" height="29">:27290676</td>
                    <td width="725" height="29">&nbsp;</td>
                <!--    <td width="58" height="29"><b>TARIH</b></td> -->
                <tr>
                    <td width="920" height="33" colspan="4">&nbsp;</td>
                    <td width="142" height="33"><?php echo date('d.m.Y'); ?></td>
                </tr>
                </tr>
                <tr>
                    <td width="1062" height="67" colspan="5">
                        <p align="left"><font face="Times New Roman" style="font-size:14pt;"><span>
<p align="center"><font size="4"><b>KARAYOLLARI 5. BÖLGE MÜDÜRLÜĞÜNE</b></font></p> <br>
&emsp;&emsp;&emsp;657 Sayılı Devlet Memurları Kanununun 104. maddesine göre <?php echo date("d.m.Y",strtotime($izin_yazdir->izin_baslayis)) ?> tarihinden geçerli olmak üzere <br>&emsp;<?= $izin_yazdir->izin_vefat ?> vefatından dolayı <?= $izin_yazdir->izin_suresi ?> (<?php echo yaziylasayi($izin_yazdir->izin_suresi) ?>) günlük vefat izni verilmesini arz ederim.
<br>
&nbsp;</span></font></p>
                    </td>
                </tr>
                <tr>
                    <td width="920" height="33" colspan="4">&nbsp;</td>
                   <td width="140" height="40"><font face="Times New Roman" style="font-size:14pt;">...../...../<?php echo date("Y");?></font></td>
                </tr>

                <tr>
                    <td width="137" height="17" colspan="2"><b><font face="Times New Roman"><span style="font-size:14pt;">&nbsp;T.C. Kimlik No</span></font></b></td>
                    <td width="925" height="17" colspan="3"><b><span style="font-size:14pt;">:</span></b><span style="font-size:14pt;"> <?= $izin_yazdir->personel_tc; ?></span></td>
                </tr>
                <tr>
                    <td width="137" height="18" colspan="2"><b><font face="Times New Roman"><span style="font-size:14pt;">&nbsp;Sicil No</span></font></b></td>
                    <td width="925" height="18" colspan="3"><b><span style="font-size:14pt;">:</span></b><span style="font-size:14pt;"> <?= $izin_yazdir->personel_sicilno; ?></span></td>
                </tr>
                <tr>
                    <td width="137" height="24" colspan="2"><b><font face="Times New Roman"><span style="font-size:14pt;">&nbsp;Adı, Soyadı</span></font></b></td>
                    <td width="925" height="24" colspan="3"><b><span style="font-size:14pt;">:</span></b><span style="font-size:14pt;"> <?= $izin_yazdir->personel_adsoyad ?></span></td>
                </tr>
                <tr>
                    <td width="137" height="12" colspan="2"><b><font face="Times New Roman"><span style="font-size:14pt;">&nbsp;Görevi</span></font></b></td>
                    <td width="925" height="12" colspan="3"><b><span style="font-size:14pt;">:</span></b><span style="font-size:14pt;"> <?= $izin_yazdir->unvan_ad; ?></span></td>
                </tr>
                    <td width="137" height="12" colspan="2"><b><font face="Times New Roman"><span style="font-size:14pt;">&nbsp;Tel</span></font></b></td>
                    <td width="925" height="12" colspan="3"><b><span style="font-size:14pt;">:</span></b><span style="font-size:14pt;"> 0<?= $izin_yazdir->personel_telefon; ?></span></td>
                </tr>
                <tr>
                    <td width="137" height="11" colspan="2"><b><font face="Times New Roman"><span style="font-size:14pt;">&nbsp;İzin Adresi</span></font></b></td>
                    <td width="925" height="11" colspan="3"><b><span style="font-size:14pt;">:</span></b><span style="font-size:14pt;"> <?= $izin_yazdir->izin_adresi; ?></span></td>
                </tr>
                <tr>
                    <td width="137" height="15" colspan="2"><span style="font-size:14pt;">&nbsp;</span></td>
                   <!-- <td width="925" height="15" colspan="3"><span style="font-size:14pt;">&nbsp;&nbsp;ADRESDEVAM_CEK</span></td>-->
                </tr>
                <tr>
                    <td width="1062" height="55" colspan="5"><br>
<br>
<font face="Times New Roman" style="font-size:14pt;">&emsp;&emsp;&emsp;İlgilinin belirtilen tarihler arasında izin kullanmasında sakınca olmadığını arz ederim.</font><br>
<br>
&nbsp;</td>
                </tr>
                <tr>
                    <td width="862" height="22" colspan="3">&nbsp;</td>
                    <td width="200" height="22" colspan="2">
                        <p align="center"><b><span style="font-size:14pt;"><font face="Times New Roman"><?= $ayar->ayar_yonetici ?></font></span></b></p>
                    </td>
                </tr>
                <tr>
                    <td width="862" height="10" colspan="3">&nbsp;</td>
                    <td width="200" height="10" colspan="2">
                        <p align="center"><b><span style="font-size:14pt;"><font face="Times New Roman"><?= $ayar->ayar_yoneticiunvan ?></font></span></b></p>
                    </td>
                </tr>
                <tr>
                    <td width="862" height="32" colspan="3">&nbsp;</td>
                    <td width="200" height="32" colspan="1">&nbsp;</td>
                </tr>
            </table>
            <p>&nbsp;<font size="4"></font></p>
            <p align="center">&nbsp;</p>
            <p align="center"><font style="font-size:14pt;"><b>UYGUNDUR</b></font></p>
            <p align="center"><font style="font-size:14pt;"><b>...../...../<?php echo date("Y"); ?><br>
<br>
&nbsp;</b></font></p> 
    
    <tr> 
        <td width="1060" height="429">
            <table border="0" cellpadding="0" cellspacing="0" width="1061" height="364">
                <tr>

                    <td width="1061" height="77" colspan="2"> <br>
                        <p align="center"><font size="4"><b>PERSONEL ŞUBESİ MÜDÜRLÜĞÜNE</b></font></p>
                       
                        <p>&nbsp;</p>
                        <p><font face="Times New Roman" style="font-size:14pt;">&emsp;&emsp;&emsp;Adı geçen personel yukarıda belirtilen iznini  ...../...../<?php echo date("Y"); ?>  -  ....../....../<?php echo date("Y"); ?> tarihleri arasında (......) gün kullanmıştır</font><br>
&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td width="935" height="119"><font face="Times New Roman" style="font-size:14pt;">&emsp;&emsp;&emsp;Bilgilerinize arz ederim.</font></td>
                </tr>

                <tr>
                    <td width="1061" height="66" colspan="2">&nbsp;</td>
                </tr>
            </table>
            <p>&nbsp;<font size="4"></font></p>
        </td>
    </tr>
</table>
<font style="font-size:10pt;"  face="Times New Roman" >Form Stok No:7583420</font><br>
<font style="font-size:10pt;"  face="Times New Roman" ><b>AÇIKLAMA</b></font>
<table border="0" cellpadding="0" cellspacing="0" width="1060" height="auto">
    <tr>
        <td width="1060" height="10"><font style="font-size:10pt;" face="Times New Roman"><b>1. </b>Merkez Teşkilatında bir nüsha olarak düzenlenir. İzin bitiminde formun 2. bölümü doldurulup onaylandıktan sonra, ilgilinin şahsi dosyasına konur.</font></td>
    </tr>
    <tr>
        <td width="1060" height="10"><font style="font-size:10pt;" face="Times New Roman"><b>2. </b>Taşra Teşkilatında iki nüshha olarak düzenlenir. ikinci nüsha izne başlanıldığında, birinci nüsha ise izin bitiminde formun 2. bölümü doldurulup</font></td>
    </tr>
    <tr>
        <td width="1060" height="10"><font style="font-size:10pt;" face="Times New Roman">&nbsp;&nbsp;&nbsp;onaylandıktan sonra, Personel Şube Müdürlüğüne gönderilir ve her iki nüsha birleştirilerek ilgilinin şahsi dosyasýna konur.</font></td>
    </tr>
    <tr>
        <td width="1060" height="10"><font style="font-size:10pt;" face="Times New Roman"><b>3. </b>Form, izin başlangıcından önce kayda alınır.</font></td>
    </tr>
</table>
</body>
</html>



<?php 
function yaziylasayi($sayi) { 
    $o = array( 
        'birlik' => array('bir', 'iki', 'üç', 'dört', 'beş', 'altı', 'yedi', 'sekiz', 'dokuz'), 
        'onluk' => array('on', 'yirmi', 'otuz', 'kırk', 'elli', 'altmış', 'yetmiş', 'seksen', 'doksan'), 
        'basamak' => array('yüz', 'bin', 'milyon', 'milyar', 'trilyon', 'katrilyon') 
    ); 

    // Sayıyı basamaklarına ayırıyoruz 
    $basamak = array_reverse(str_split(implode('', array_reverse(str_split($sayi))), 3)); 

    // Basamak sayısını belirliyoruz 
    $basamak_sayisi = count($basamak); 

    // Her basamak için: 
    for($i=0; $i < $basamak_sayisi; ++$i) { 
        // Sayıyı basamaklarına ayırdığımızda basamaklar tersine döndüğü için burada ufak bir işlem ile basamakları düzeltiyoruz 
        $basamak[$i] = implode(array_reverse(str_split($basamak[$i]))); 
         
        // Eğer basamak 4, 8, 15, 16, 23, 42 gibi 1 veya 2 rakamlıysa başına 3 rakama tamamlayacak şekilde "0" ekliyoruz ki foreach döngüsünde problem olmasın 
        if(strlen($basamak[$i]) == 1) 
            $basamak[$i] = '00' . $basamak[$i]; 
        elseif(strlen($basamak[$i]) == 2) 
            $basamak[$i] = '0' . $basamak[$i]; 
    } 

    $yenisayi = array(); 

    // Her basamak için: ($yenisayi değişkenine) 
    foreach($basamak as $k => $b) { 
        // basamağın ilk rakamı 0'dan büyük ise 
        if($b[0] > 0) 
            // değişkene rakamın harfle yazılışı ve "yüz" ekliyoruz 
            $yenisayi[] = ($b[0] > 1 ? $o['birlik'][$b[0]-1] . ' ' : '') . $o['basamak'][0]; 

        // basamağın 2. rakamı 0'dan büyük ise 
        if($b[1] > 0) 
            // değişkene rakamın harfle yazılışını ekliyoruz 
            $yenisayi[] = $o['onluk'][$b[1]-1]; 

        // basamağın 3. rakamı 0'dan büyük ise 
        if($b[2] > 0) 
            // değişkene rakamın harfle yazılışını ekliyoruz 
            $yenisayi[] = $o['birlik'][$b[2]-1]; 

        // değişkene basamağın ismini (bin, milyon, milyar) ekliyoruz 
        if($basamak_sayisi > 1) 
            $yenisayi[] = $o['basamak'][$basamak_sayisi-1]; 

        // Basamak sayısını azaltıyoruz ki her basamağın sonuna ilkinde ne yazıyorsa o yazılmasın 
        --$basamak_sayisi; 
    } 
     
    return implode(' ', $yenisayi); 
}    ?>



