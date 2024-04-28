</div>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>
<script src="js/main.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable({
            responsive: true,
            buttons: {
                buttons: ['copy', 'csv', 'excel']
            }
        });


        $('.hiddenDiv').hide();

        // Show the initially selected div
        showSelectedDiv($('#type').val());

        // On dropdown change, show the corresponding div and hide others
        $('#type').change(function () {
            var selectedValue = $(this).val();
            showSelectedDiv(selectedValue);
        });

        // Function to show the selected div and hide others
        function showSelectedDiv(selectedValue) {
            $('.hiddenDiv').hide(); // Hide all divs
            if (selectedValue !== '') {
                $('#' + selectedValue.toLowerCase() + 'Div').show(); // Show the selected div
            }
        }
    });

</script>
</body>

</html>