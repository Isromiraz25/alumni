<script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- Date Picker -->
    <script src="{{ asset('assets/js/gijgo.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/animated.headline.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>

    <!-- contact js -->
    <script src="{{ asset('assets/js/contact.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.form.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/mail-script.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    {{--  <script>
        function toggleDetails(icon) {
            var content = icon.nextElementSibling;
            content.style.display = (content.style.display === 'none' || content.style.display === '') ? 'block' : 'none';
        }
    </script>  --}}
    <script>
        function generateCalendar() {
            var today = new Date();
            var currentMonth = today.getMonth();
            var currentYear = today.getFullYear();
            var currentDate = today.getDate();

            var firstDay = new Date(currentYear, currentMonth, 1);
            var lastDay = new Date(currentYear, currentMonth + 1, 0);

            var table = document.getElementById("calendar");
            var monthYear = document.getElementById("month-year");
            monthYear.innerHTML = getMonthName(currentMonth) + " " + currentYear;

            var tbody = document.getElementById("calendar-body");
            tbody.innerHTML = '';

            var date = 1;
            var firstDayIndex = firstDay.getDay();

            for (var i = 0; i < 6; i++) {
                var row = tbody.insertRow(i);

                for (var j = 0; j < 7; j++) {
                    var cell = row.insertCell(j);

                    if (i === 0 && j < firstDayIndex) {
                        // Cell before the first day of the month
                        continue;
                    }

                    if (date > lastDay.getDate()) {
                        // Stop if we have reached the end of the month
                        break;
                    }

                    cell.innerHTML = date;

                    // Add a class to highlight the current date
                    if (date === currentDate && currentMonth === today.getMonth() && currentYear === today.getFullYear()) {
                        cell.classList.add("current-date");
                    }

                    // Add a click event listener to each cell
                    cell.addEventListener("click", function() {
                        alert("Date clicked: " + this.innerHTML);
                        // You can replace the alert with your custom logic
                    });

                    date++;
                }
            }
        }

        function getMonthName(month) {
            var monthNames = ["January", "February", "March", "April", "May", "June",
                              "July", "August", "September", "October", "November", "December"];
            return monthNames[month];
        }

        // Call the function to generate the initial calendar
        generateCalendar();
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){
            $("#btn-register").click(function(){
                $("#exampleModal .btn-close").click()
                $('#registerModal').modal('show');

            });
          });
    </script>

<script>
    $(document).ready(function(){
        $("#btn-register").click(function(){
            $("#exampleModal .btn-close").click()
            $('#loginModal').modal('show');

        });
      });
</script>
</body>
</html>


<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable({

            "paging": true,
                "pagingType": "simple_numbers", // Hanya menampilkan next dan previous
                "searching": false, // Menonaktifkan fitur pencarian
                "lengthChange": false, // Menonaktifkan opsi "Show"
                "info": false,
                "pageLength": 5, // Menampilkan hanya 5 data per halaman
                // Lainnya sesuai kebutuhan
        });
    });
</script>



<script>
    $(document).ready(function () {
        $('#idsiswa').DataTable({

            "paging": true,
                "pagingType": "simple_numbers", // Hanya menampilkan next dan previous
                "searching": false, // Menonaktifkan fitur pencarian
                "lengthChange": false, // Menonaktifkan opsi "Show"
                "info": false,
                "pageLength": 2, // Menampilkan hanya 5 data per halaman
                // Lainnya sesuai kebutuhan
        });
    });
</script>



<script>
        $(".btn-show-alumni").click(function() {
            var getId = $(this).data('id');
            console.log(getId);
            $.ajax({
                url: "get-data-alumni/" + getId,
                method: "GET",
                dataType: "json",
                success: function(data) {
                    $(".show-table tbody").empty();
                    $.each(data, function(index, alumni) {
                        var row = "<tr>" +
                            "<th scope='row'>" + (index + 1) + "</th>" +
                            "<td>" + alumni.nama + "</td>" +
                            "<td>" + alumni.agama + "</td>" +
                            "<td>" + alumni.jenis_kelamin + "</td>" +
                            "<td>" + alumni.tahun_lulus + "</td>" +
                            "<td><img src='http://127.0.0.1:8000/" + alumni.photo + "' style='width:40px;'></td>" +

                            "</tr>";

                        $(".show-table tbody").append(row);

                    });
                    $('#showAllAlumni').modal('show');
                }
            });
        });

 </script>



<script>
    $(".btn-show-siswa").click(function() {
        var getId = $(this).data('id');
        console.log(getId);
        $.ajax({
            url: "get-data-siswa/" + getId,
            method: "GET",
            dataType: "json",
            success: function(data) {
                $(".show-table tbody").empty();
                $.each(data, function(index, siswa) {
                    var row = "<tr>" +
                        "<th scope='row'>" + (index + 1) + "</th>" +
                            "<td>" + siswa.name + "</td>" +
                            "<td>" + siswa.alamat + "</td>" +
                            "<td>" + siswa.jenis_kelamin + "</td>" +
                            "<td><img src='http://127.0.0.1:8000/" + siswa.photo + "' style='width:40px;'></td>" +
                            "</tr>";
                        "</tr>";

                    $(".show-table tbody").append(row);

                });
                $('#showAllSiswa').modal('show');
            }
        });
    });

</script>






