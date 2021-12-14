<footer class="footer mt-auto">
    <div class="copyright bg-white">
      <p>
        &copy; <span id="copy-year">2019</span> Copyright NiuTAM Dashboard by
        <a
          class="text-primary"
          href="{{ route('dashboard') }}"
          target="_blank"
          >NSPL ICT Department</a
        >.
      </p>
    </div>
    <script>
        var d = new Date();
        var year = d.getFullYear();
        document.getElementById("copy-year").innerHTML = year;
    </script>
</footer>