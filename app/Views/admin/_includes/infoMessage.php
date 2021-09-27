<?php
$infoMessage = session()->getFlashdata("alarm");
if ($infoMessage){
    if ($infoMessage["type"]=="success"){ ?> <!--php dosyasını kapatıyoruz ki css yazalım altta-->
        <script>
            toastr.success('<?php echo $infoMessage["message"]?>','<?php echo $infoMessage["text"]?>',{
                progressBar: !0,
                timeout: 5000,
                showMethod: 'slideDown',
                hideMethod: 'slideUp',
                positionClass: 'toast-top-right'
            });
        </script>
    <?php }else{ ?>
        <script>
            toastr.error('<?php echo $infoMessage["message"]?>','<?php echo $infoMessage["text"]?>',{
                progressBar: !0,
                timeout: 5000,
                showMethod: 'slideDown',
                hideMethod: 'slideUp',
                positionClass: 'toast-top-right'
            });
        </script>
    <?php }
}
