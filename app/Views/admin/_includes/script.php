<!-- jQuery -->
<script src="<?= base_url()?>/admin/assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url()?>/admin/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url()?>/admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url()?>/admin/assets/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?= base_url()?>/admin/assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="<?= base_url()?>/admin/assets/plugins/moment/moment.min.js"></script>
<script src="<?= base_url()?>/admin/assets/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="<?= base_url()?>/admin/assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?= base_url()?>/admin/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Toastr -->
<script src="<?= base_url()?>/admin/assets/plugins/toastr/toastr.min.js"></script>
<!-- sweetalert2 -->
<script src="<?= base_url()?>/admin/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Switchery -->
<script src="<?= base_url()?>/admin/assets/plugins/switchery/dist/switchery.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url()?>/admin/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url()?>/admin/assets/dist/js/demo.js"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="<?= base_url()?>/admin/assets/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url()?>/admin/assets/dist/js/demo.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url()?>/admin/assets/dist/js/custom.js"></script>
<!-- ChartJS -->
<script src="<?= base_url()?>/admin/assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url()?>/admin/assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url()?>/admin/assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url()?>/admin/assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url()?>/admin/assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url()?>/admin/assets/plugins/moment/moment.min.js"></script>
<script src="<?= base_url()?>/admin/assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url()?>/admin/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url()?>/admin/assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url()?>/admin/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url()?>/admin/assets/dist/js/pages/dashboard3.js"></script>
<!-- AdminLTE codegenden aldıgımız uyarı mesajının scripti -->
<?= view("admin/_includes/infoMessage")?>

<!-- DataTables  & Plugins -->
<script src="<?= base_url()?>/admin/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>/admin/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url()?>/admin/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url()?>/admin/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url()?>/admin/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url()?>/admin/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url()?>/admin/assets/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url()?>/admin/assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url()?>/admin/assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url()?>/admin/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url()?>/admin/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url()?>/admin/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>$.widget.bridge('uibutton', $.ui.button)</script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
        //Money Euro
        $('[data-mask]').inputmask()

        //Date picker
        $('#reservationdate').datetimepicker({
            format: 'L'
        });

        //Date and time picker
        $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            locale: {
                format: 'MM/DD/YYYY hh:mm A'
            }
        })
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
                ranges   : {
                    'Today'       : [moment(), moment()],
                    'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                    'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate  : moment()
            },
            function (start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
            }
        )

        //Timepicker
        $('#timepicker').datetimepicker({
            format: 'LT'
        })

        //Bootstrap Duallistbox
        $('.duallistbox').bootstrapDualListbox()

        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()

        $('.my-colorpicker2').on('colorpickerChange', function(event) {
            $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
        })

        $("input[data-bootstrap-switch]").each(function(){
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        })

    })
    // BS-Stepper Init
    document.addEventListener('DOMContentLoaded', function () {
        window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    })

    // DropzoneJS Demo Code Start
    Dropzone.autoDiscover = false

    // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
    var previewNode = document.querySelector("#template")
    previewNode.id = ""
    var previewTemplate = previewNode.parentNode.innerHTML
    previewNode.parentNode.removeChild(previewNode)

    var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
        url: "/target-url", // Set the url
        thumbnailWidth: 80,
        thumbnailHeight: 80,
        parallelUploads: 20,
        previewTemplate: previewTemplate,
        autoQueue: false, // Make sure the files aren't queued until manually added
        previewsContainer: "#previews", // Define the container to display the previews
        clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
    })

    myDropzone.on("addedfile", function(file) {
        // Hookup the start button
        file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
    })

    // Update the total progress bar
    myDropzone.on("totaluploadprogress", function(progress) {
        document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
    })

    myDropzone.on("sending", function(file) {
        // Show the total progress bar when upload starts
        document.querySelector("#total-progress").style.opacity = "1"
        // And disable the start button
        file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
    })

    // Hide the total progress bar when nothing's uploading anymore
    myDropzone.on("queuecomplete", function(progress) {
        document.querySelector("#total-progress").style.opacity = "0"
    })

    // Setup the buttons for all transfers
    // The "add files" button doesn't need to be setup because the config
    // `clickable` has already been specified.
    document.querySelector("#actions .start").onclick = function() {
        myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
    }
    document.querySelector("#actions .cancel").onclick = function() {
        myDropzone.removeAllFiles(true)
    }
    // DropzoneJS Demo Code End
</script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
<script>
    const pazarDahilEdilecekTatilTipleri = [1];
    const pazarDahilEdilecekUnvanTipleri = [2];
    /*padNumber fonksiyonu gün ve ayları iki haneli göstermek için 3 ise 03 olarak yazacak*/
    function padNumber(number) {
        var string  = '' + number;
        string      = string.length < 2 ? '0' + string : string;
        return string;
    }

    function addNewDate() {
        console.log("*** addNewDate fired")
        var
            baslangicTarih = document.getElementById('baslamatarihi').value,
            izinSuresi = parseInt(document.getElementById('izin_suresi').value),
            bitisTarih = document.getElementById('bitistarihi'),
            iseBaslayis = document.getElementById('isebaslayis');
        debugger;
        if (! baslangicTarih){
            return false;
        }
        const tatilGunSayisi = tatilGunSayisiniBul(new Date(baslangicTarih), izinSuresi);
        baslangicTarih = new Date(baslangicTarih);
        let hesaplananSure = izinSuresi + tatilGunSayisi - 1;
        var bitisTarihiAsDate = new Date(baslangicTarih.setDate(baslangicTarih.getDate() + hesaplananSure)); //cuamrtesiye denk
        var bitisTarihNewValue = bitisTarihiAsDate.getUTCFullYear() + '-' + padNumber(bitisTarihiAsDate.getUTCMonth()+1) + '-' + padNumber(bitisTarihiAsDate.getUTCDate());

        var bitisTarihiAsDate = new Date(baslangicTarih.setDate(baslangicTarih.getDate() + (bitisTarihiAsDate.getDay() === 6 ? 2 : 1)));//cuamrtesiye denk gelirse 2 ekleyecek başlayışa
        var iseBaslayisNewValue = bitisTarihiAsDate.getUTCFullYear() + '-' + padNumber(bitisTarihiAsDate.getUTCMonth()+1) + '-' + padNumber(bitisTarihiAsDate.getUTCDate());
        bitisTarih.value = bitisTarihNewValue;
        iseBaslayis.value = iseBaslayisNewValue;
        //document.getElementById('isebaslayis').value = baslamaformated;
    }

    function tatilGunSayisiniBul(baslangicTarih, izinGunSayisi) {
        var izinturId = parseInt(document.querySelector('select[name="izin_turid"]').value);

        if (pazarDahilEdilecekTatilTipleri.indexOf(izinturId) === -1) {
            return 0;
        } else {
            var
                personelSelectBox = document.querySelector('select[name="izin_personel"]'),
                personelId = parseInt(personelSelectBox.value),
                personelUnvanId = parseInt(personelSelectBox.querySelector(`option[value="${personelId}"]`).getAttribute('data-unvan-id')),
                bitisTarih = new Date(baslangicTarih.getTime()), // Basşlangıç 01 ise
                bitisTarih = new Date(bitisTarih.setDate(bitisTarih.getDate() + izinGunSayisi)); // Bitiş 11 oluyor

            if (pazarDahilEdilecekUnvanTipleri.indexOf(personelUnvanId) === -1) {
                return 0
            }

            return pazarGunleriniSay(baslangicTarih, bitisTarih);

        }
    }

    function pazarGunleriniSay(baslangicTarih, bitisTarih){
        var start = baslangicTarih,
            end = bitisTarih;
        if(end <= start)return 0; //avoid infinite loop;
        for(var count = 0; start < end; start.setDate(start.getDate() + 1)){
            if(start.getDay() === 0) {
                count++;
                end.setDate(end.getDate() + 1);
            }
        }
        return count;
    }

</script>