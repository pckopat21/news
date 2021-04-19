


<table border="2" width="904" height="1310" bordercolor="black" cellspacing="0" cellpadding="0">
        <td width="895" height="51" colspan="3">
            <table border="0" cellpadding="0" cellspacing="0" width="896" height="65">
                <tr>
                    <td width="896" height="34" colspan="3"><span style="font-size:16pt;"><b>&nbsp;KARAYOLLARI GENEL MÜDÜRLÜĞÜ</b></span></td></tr>
                    <td width="375" height="31">
                        <p align="center"><b>5.BÖLGE MÜDÜRLÜĞÜ</b></p>
                    </td>
                    <td width="427" height="31">
                        <p align="center"><b>HASTALIK İZİN FORMU</b></p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td width="93" height="90" rowspan="3">
            <p align="center"><font style="writing-mode:rl-tb"><b>HASTALIK<br></b></font><b>İZNİ<br>KULLANANIN</b></p></td>
        <td width="369" height="29"><b><p>&nbsp;ADI SOYADI:</p></b></td>
        <td width="422" height="29"><span style="font-size:14pt;">&nbsp; <?= $izin_yazdir->personel_adsoyad ?></span></td>
    </tr>
    <tr>
        <td width="369" height="30"><b><p>&nbsp;SİCİL NO:</p></b></td>
        <td width="422" height="30"><span style="font-size:14pt;">&nbsp; <?= $izin_yazdir->personel_sicilno; ?></span></td>
    </tr>
    <tr>
        <td width="369" height="30"><b><p>&nbsp;ÇALIŞTIĞI BİRİM:</p></b></td>
        <td width="422" height="30"><span style="font-size:14pt;">&nbsp; <?= $ayar->ayar_kurum; ?></span></td>
    </tr>
    <tr>
        <td width="468" height="30" colspan="2"><b><p>&nbsp;&nbsp;SAĞLIK KURUMUNUN ADI:</p></b></td>
        <td width="422" height="30"><span style="font-size:14pt;">&nbsp; <?= $izin_yazdir->izin_saglikkurumu; ?></span></td>
    </tr>
    <tr>
        <td width="468" height="30" colspan="2"><b><p>&nbsp;&nbsp;HASTALIK İZİN SÜRESİ:</p></b></td>
        <td width="422" height="30"><span style="font-size:14pt;">&nbsp; <?= $izin_yazdir->izin_suresi; ?> (<?= yaziylasayi($izin_yazdir->izin_suresi) ?>) Gün</span></td>
    </tr>
    <tr>
        <td width="895" height="528" colspan="3">
            <table border="0" cellpadding="0" cellspacing="0" width="896" height="543">
                <tr>
                    <td width="1062" height="67" colspan="5">
                        <p align="left"><font face="Times New Roman" style="font-size:14pt;"><span>
                                    &emsp;&emsp;&emsp;&emsp;&emsp;657 Sayılı Devlet Memurları Kanununun 105 ve 107. Maddeleri uyarınca
                                    <?= date("d.m.Y",strtotime($izin_yazdir->izin_baslayis)) ?> tarihinden <br><br>&emsp; &emsp; başlayarak
                                    <?= $izin_yazdir->izin_suresi ?> (<?= yaziylasayi($izin_yazdir->izin_suresi) ?>) gün süre ile izinli sayılmasını
                                    arz ederim.<br> <br>&nbsp;</span></font></p>
                    </td>
                </tr>
                <tr>
                    <td width="200" height="10" colspan="2"><p align="right"><b><span style="font-size:14pt;">&emsp;&emsp;&emsp;&emsp;<font face="Times New Roman"><?= $ayar->ayar_yonetici ?></font></span></b></p></td>
                </tr>
                <tr>
                    <td width="200" height="10" colspan="2"><p align="right"><b><span style="font-size:14pt;"><font face="Times New Roman"><?= $ayar->ayar_yoneticiunvan ?></font></span></b></p></td>
                </tr>
                <tr><td width="419" height="10"><p align="center"><font style="font-size:14pt;"><b>UYGUNDUR</b></font></p></td></tr>
                <tr>
                <td width="419" height="24"><p align="center"><font style="font-size:14pt;"><b>....../....../<?= date("Y"); ?><br><br><br><br><br><br><br></b></font></p></td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td width="895" height="265" colspan="3">
<table border="0" cellpadding="0" cellspacing="0" width="1061" height="423">
                <tr><td width="1061" height="10" colspan="5"></td></tr>
                <tr>
                    <td width="920" height="33" colspan="4">&nbsp;</td>
                    <td width="142" height="33"><p align="center"><font style="font-size:14pt;">...../...../<?= date("Y"); ?><br></td>
                </tr>
                <tr><td width="1061" height="57" colspan="5"></td></tr>
                <tr>
                    <td width="109" height="16"><font face="Times New Roman"><span style="font-size:14pt;">&nbsp;</span></font></td>
                    <td width="603" height="16"><font face="Times New Roman"><span style="font-size:14pt;"></span></font></td>
                    <td width="349" height="16" colspan="3"><font face="Times New Roman"><span style="font-size:14pt;"></span></font></td>
                </tr>
                <tr><td width="1061" height="51" colspan="5">&nbsp;</td></tr>
                <tr>
                    <td width="1061" height="29" colspan="5">
                        <p align="left"><font style="font-size:14pt;" face="Times New Roman">&emsp;&emsp;&emsp;Adı geçen personel  ...../...../<?= date("Y"); ?>  ile  ....../....../<?= date("Y"); ?> tarihleri arasında (......) gün Hastalık iznini kullanarak görevine başlamıştır.</font></p> <br>
                    </td>
                </tr>
                <tr>
                    <td width="1061" height="10" colspan="5"><font style="font-size:14pt;" face="Times New Roman">&emsp;&emsp;&emsp;Bilgilerinize arz ederim.</font></td>
                </tr>
                <tr>
                    <td width="1061" height="29" colspan="5">&nbsp;</td>
                </tr>
                <tr>
                    <td width="779" height="6" colspan="3">&nbsp;</td><td width="282" height="6" colspan="2">
                        <p align="center"><b><font face="Times New Roman"><span style="font-size:14pt;"><?= $ayar->ayar_mudur ?></span></font></b></p></td>
                </tr>
                <tr>
                    <td width="779" height="11" colspan="3">&nbsp;</td><td width="282" height="11" colspan="2">
                        <p align="center"><b><font face="Times New Roman"><span style="font-size:14pt;"><?= $ayar->ayar_mudurunvan ?></span></font></b></p> <br><br><br><br>
                    </td>
                </tr>
                <tr>
                    <td width="779" height="3" colspan="3">&nbsp;</td><td width="282" height="3" colspan="2">&nbsp;</td>
                </tr>
            </table>
        </td>
    </tr>


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