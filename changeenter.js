<script type="text/javascript">
  function changeenter(){
    var frm = document.instatext;
    frm.text1.value = frm.text1.value.replace(/(?:\r\n|\r|\n)/g,'\u00a0\n');
    var copyText = document.getElementById("myinput");
    copyText.select();
    document.execCommand("copy");
    alert("변환 후 복사되었습니다 :)");
  }
  </script>
