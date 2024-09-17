<script>
  let cookies = document.cookie.split("; ");
  cookies.forEach(cookie => {
    document.body.innerHTML += "<p>" + cookie + "</p>";
  });
</script>
