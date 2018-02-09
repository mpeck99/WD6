
<footer class="fixed-bottom" style="text-align:center">
<p>Morgan Peck 2018</p>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script type="text/javascript">

  (function () {
  $('[data-toggle="tooltip"]').tooltip();
  $('[data-toggle="popover"]').popover();
  $('.carousel').carousel();
})();
</script>
<script>
$("#ajaxsubmit").click(function(){
       $.ajax({
           method:'POST',
           url:'/mycontroller/ajaxPars',
           data:{"email":$('#email').val(),"password":$('#password').val()},
           success:function(msg){
console.log(msg)
               if(msg=="welcome"){
                   alert("welcome");
                   }else{alert("oops")}
           }
       })
   });
    </script>
</body>
</html>