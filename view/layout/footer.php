        </div>
        <div class="text-center bg-light fixed-bottom pt-1 pb-1">Copyright 2020 &copy All Right Reserved</div>
</body>

<script>
        function printContent(el){
                var restorepage = document.body.innerHTML;
                var printcontent = document.getElementById(el).innerHTML;
                document.body.innerHTML = printcontent;
                window.print();
                document.body.innerHTML = restorepage;
        }
</script>

</html>