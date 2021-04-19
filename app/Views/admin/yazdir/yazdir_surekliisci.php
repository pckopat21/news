<html>
<head>
    <title> &nbsp; </title>
</head>
<body bgcolor="white" text="black" link="blue" vlink="purple" alink="red">
    <table border="0" cellpadding="0" cellspacing="0" width="1060" height="auto">
    <tr>
        <td width="1060" height="auto">
            <p align="center"><b><font face="Times New Roman"><span style="font-size:16pt;">
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
            <p align="center"><b><font face="Times New Roman"><span style="font-size:16pt;">İŞÇİ İZİN FORMU</span></font></b><font size="4"></font></p>
        </td>
    </tr>
</table>
<table border="2" bordercolor="black" cellpadding="0" cellspacing="0" width="1066" height="100">
    <tr>
        <td width="1060" height="469">
            <table border="0" cellpadding="0" cellspacing="0" width="1062" height="412">
                <tr>
                    <td width="1062" height="29" colspan="3">
                        <p align="center"><b>
<font face="Times New Roman"><span style="font-size:14pt;">
KARAYOLLARI 5. BÖLGE MÜDÜRLÜĞÜNE</span></font></b></p>
                    </td>
                </tr>
                <tr>
                    <td width="1062" height="67" colspan="3">
                        <p align="left"><font face="Times New Roman"><span style="font-size:14pt;"><br>
&emsp;&emsp;&emsp;Yüksek Hakem Kurulu başkanlığının 2017/1615 karar numaralı kararının 25. A maddesi uyarınca <?= $izin_yazdir->izin_suresi ?> (<?= yaziylasayi($izin_yazdir->izin_suresi) ?>) gün <?= $izin_yazdir->izin_yil ?> yılı <br>&emsp;&emsp;iznimin <?= date("d.m.Y",strtotime($izin_yazdir->izin_baslayis)) ?> tarihinden geçerli olmak üzere verilmesini müsadelerinize arz ederim.</span>
<span style="font-size:14pt;"><br>&nbsp;</span></font></p>
                    </td>
                </tr>
                <tr>
                    <td width="920" height="33" colspan="2">&nbsp;</td>
                    <td width="140" height="33"><font face="Times New Roman" style="font-size:14pt;"><?= date('d.m.Y'); ?></font></td>
                </tr>
                <tr>
                    <td width="1062" height="34" colspan="3">
                        <font face="Times New Roman" style="font-size:14pt;"><p>&nbsp;(......)  gün yol izni istiyorum / istemiyorum.<br><br>&nbsp;</b></p></font>
                    </td>
                </tr>
                <tr>
                    <td width="137" height="17"><b><font face="Times New Roman"><span style="font-size:14pt;">&nbsp;T.C. Kimlik No</span></font></b></td>
                    <td width="925" height="17" colspan="2"><b><span style="font-size:14pt;">:</span></b><span style="font-size:14pt;"> <?= $izin_yazdir->personel_tc; ?></span></td>
                </tr>
                <tr>
                    <td width="137" height="18"><b><font face="Times New Roman"><span style="font-size:14pt;">&nbsp;Sicil No</span></font></b></td>
                    <td width="925" height="18" colspan="2"><b><span style="font-size:14pt;">:</span></b><span style="font-size:14pt;"> <?= $izin_yazdir->personel_sicilno; ?></span></td>
                </tr>
                <tr>
                    <td width="137" height="24"><b><font face="Times New Roman"><span style="font-size:14pt;">&nbsp;Adı Soyadı</span></font></b></td>
                    <td width="925" height="24" colspan="2"><b><span style="font-size:14pt;">:</span></b><span style="font-size:14pt;"> <?= $izin_yazdir->personel_adsoyad; ?></span></td>
                </tr>
                <tr>
                    <td width="137" height="12"><b><font face="Times New Roman"><span style="font-size:14pt;">&nbsp;Pozisyonu</span></font></b></td>
                    <td width="925" height="12" colspan="2"><b><span style="font-size:14pt;">:</span></b><span style="font-size:14pt;"> <?= $izin_yazdir->unvan_ad; ?></span></td>
                </tr>
                <tr>
                    <td width="137" height="12"><b><font face="Times New Roman"><span style="font-size:14pt;">&nbsp;İşe Giriş Tarihi</span></font></b></td>
                    <td width="925" height="12" colspan="2"><b><span style="font-size:14pt;">:</span></b><span style="font-size:14pt;"> <?= date("d.m.Y",strtotime($izin_yazdir->personel_isegiristarih)) ?></span></td>
                </tr>                <tr>
                    <td width="137" height="11"><b><font face="Times New Roman"><span style="font-size:14pt;">&nbsp;İzin Adresi</span></font></b></td>
                    <td width="925" height="11" colspan="2"><b><span style="font-size:14pt;">:</span></b><span style="font-size:14pt;"> <?php if ($izin_yazdir->izin_adresi == is_null(0)) echo $izin_yazdir->personel_adres; else echo $izin_yazdir->izin_adresi; ?></span></td>
                </tr>
               <!-- <tr>
                    <td width="137" height="15"><span style="font-size:14pt;">&nbsp;</span></td>
                    <td width="925" height="15" colspan="2"><span style="font-size:14pt;">&nbsp;&nbsp;ADRESDEVAM_CEK</span></td>
                </tr>-->
            </table>
    
        <tr>
        <td width="1060" height="13">
            <table border="0" cellpadding="0" cellspacing="0" width="1060" height="417">
                <tr>
                    <td width="1060" height="43" colspan="3">
                        <p align="center"><font face="Times New Roman"><span style="font-size:14pt;"><b><br>
KARAYOLLARI 5. BÖLGE MÜDÜRLÜĞÜNE</b></span></font></p>
                    </td>
                </tr>
                <tr>
                    <td width="1060" height="61" colspan="3">
                        <p align="left"><font face="Times New Roman"><span style="font-size:14pt;">
<br>
<br>
&emsp;&emsp;&emsp;İlgilinin belirtilen tarihler arasinda <?= $izin_yazdir->izin_suresi ?> (<?= yaziylasayi($izin_yazdir->izin_suresi) ?>) gün <?= $izin_yazdir->izin_yil ?>  yılı iznini kullanmasında sakınca olmadığını arz ederim.</span></font></p>
                    </td>
                </tr>
                <tr>
                    <td width="779" height="44"><font face="Times New Roman"><span style="font-size:14pt;">&nbsp;</span></font></td>
                    <td width="141" height="44">&nbsp;</td>
                    <td width="200" height="44"><font face="Times New Roman" style="font-size:14pt;">...../......../<?= date("Y");?></font></td>
                </tr>
                <tr>
                    <td width="779" height="49">&nbsp;</td>
                    <td width="141" height="49">&nbsp;</td>
                    <td width="140" height="49">&nbsp;</td>

                </tr>
                <tr>
                    <td width="779" height="22"><font face="Times New Roman"><span style="font-size:14pt;">&nbsp;</span></font></td>
                    <td width="281" height="22" colspan="2">
                        <p align="center"><font face="Times New Roman"><span style="font-size:14pt;"><b><?= $ayar->ayar_yonetici ?></b></span></font></p>
                    </td>
                </tr>
                <tr>
                    <td width="779" height="10"><font face="Times New Roman"><span style="font-size:14pt;">&nbsp;</span></font></td>
                    <td width="281" height="10" colspan="2">
                        <p align="center"><font face="Times New Roman"><span style="font-size:14pt;"><b><?= $ayar->ayar_yoneticiunvan ?></b></span></font></p>
                    </td>
                </tr>
                <tr>
                    <td width="1060" height="auto" colspan="3">
                        <p align="center"><b><font face="Times New Roman"><span style="font-size:14pt;">UYGUNDUR<br>
                                            ...../...../<?= date("Y"); ?><br>
                                            <br>
                                            &nbsp;</span></font></b></p>
                    </td>
                </tr>
            </table>
</td>
<tr>
        <td width="1060" height="auto">
            <table border="0" cellpadding="0" cellspacing="0" width="1061" height="423">
                <tr>
                    <td width="1061" height="19" colspan="5">
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td width="109" height="19">
                        <p align="right"><b>Kayıt No</b></p>
                    </td>
                    <td width="816" height="19" colspan="3">: 27290676</td>
                  <!--  <td width="136" height="19">TARIH_CEK</td> -->
                </tr>
                <tr>
                    <td width="1061" height="74" colspan="5">
                       <!-- <p>&nbsp;</p> -->
                        <p align="center"><b><font face="Times New Roman"><span style="font-size:14pt;">PERSONEL ŞUBESİ MÜDÜRLÜĞÜNE</span></font></b></p>
                    </td>
                </tr>
                <tr>
                    <td width="1061" height="57" colspan="5">
                       <!-- <p>&nbsp;</p> -->
                    </td>
                </tr>
                <tr>
                    <td width="109" height="24"><font face="Times New Roman"><span style="font-size:14pt;">&nbsp;</span></font></td>
                    <td width="603" height="24"><font face="Times New Roman"><span style="font-size:14pt;">(.....) Gün ....... İzni</span></font></td>
                    <td width="349" height="24" colspan="3"><font face="Times New Roman"><span style="font-size:14pt;">(.....) Gün hafta tatili</span></font></td>
                </tr>
                <tr>
                    <td width="109" height="16"><font face="Times New Roman"><span style="font-size:14pt;">&nbsp;</span></font></td>
                    <td width="603" height="16"><font face="Times New Roman"><span style="font-size:14pt;">(.....) Gün genel tatil</span></font></td>
                    <td width="349" height="16" colspan="3"><font face="Times New Roman"><span style="font-size:14pt;">(.....) Gün ücretsiz yol izni</span></font></td>
                </tr>
                <tr>
                    <td width="1061" height="51" colspan="5">&nbsp;</td>
                </tr>
                <tr>
                    <td width="1061" height="29" colspan="5">
                        <p align="left"><font face="Times New Roman" style="font-size:14pt;">&emsp;&emsp;&emsp;Adı geçen personel yukarıda belirtilen iznini ...../...../<?= date("Y"); ?>  -  ....../....../<?= date("Y"); ?> tarihleri arasında (......) gün kullanmıştır</font></p>
                    </td>
                </tr>
                <tr>
                    <td width="1061" height="10" colspan="5"><font face="Times New Roman" style="font-size:14pt;">&emsp;&emsp;&emsp;Gereğini bilgilerinize arz ederim.</font></td>
                </tr>
                <tr>
                    <td width="1061" height="29" colspan="5">&nbsp;</td>
                </tr>
                <tr>
                    <td width="779" height="6" colspan="3">&nbsp;</td>
                    <td width="282" height="6" colspan="2">
                        <p align="center"><b><font face="Times New Roman"><span style="font-size:14pt;"><?= $ayar->ayar_mudur ?></span></font></b></p>
                    </td>
                </tr>
                <tr>
                    <td width="779" height="11" colspan="3">&nbsp;</td>
                    <td width="282" height="11" colspan="2">
                        <p align="center"><b><font face="Times New Roman"><span style="font-size:14pt;"><?= $ayar->ayar_mudurunvan ?></span></font></b></p>
                    </td>
                </tr>
                <tr>
                    <td width="779" height="3" colspan="3">&nbsp;</td>
                    <td width="282" height="3" colspan="2">&nbsp;</td>
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
        <td width="1060" height="10"><font style="font-size:10pt;" face="Times New Roman"><b>1. </b>3 Nüsha Düzenlenir.
1. Nüsha, Merkezde İşçi Münasebetleri Şubesi Müdürlüğüne, Taşrada Personel Şubesi Müdürlüğüne,
</font></td>
    </tr>
    <tr>
        <td width="1060" height="10"><font style="font-size:10pt;" face="Times New Roman"><b>2. </b>2. Nüsha Bütçe Kesin Hesap ve Raporlama Şb.Md'ne gönderilir.</font></td>
    </tr>
   <!-- <tr>
        <td width="1060" height="12"><font face="Times New Roman">&nbsp;&nbsp;&nbsp;onaylandýktan sonra, Personel Þube M&uuml;d&uuml;rl&uuml;ð&uuml;ne g&ouml;nderir ve her iki n&uuml;sha birleþtirilerek ilgilinin þahsi dosyasýna konur.</font></td>
    </tr> -->
    <tr>
        <td width="1060" height="10"><font style="font-size:10pt;" face="Times New Roman"><b>3. </b>3. Nüsha işçinin dosyasına konur.</font></td>
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


