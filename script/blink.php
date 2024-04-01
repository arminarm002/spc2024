<script>
    // คำสั่ง JavaScript เพื่อเปิดหรือปิดการกระพริบข้อความ
    function toggleBlinking() {
      var blinkingText = document.getElementById('blinkingText');
      if (blinkingText.classList.contains('blinking')) {
        blinkingText.classList.remove('blinking');
      } else {
        blinkingText.classList.add('blinking');
      }
    }

    // เรียกใช้ฟังก์ชัน toggleBlinking() เมื่อเว็บโหลดเสร็จ
    window.onload = function () {
      setInterval(toggleBlinking, 500); // เรียกใช้ทุกๆ 1 วินาที
    };
  </script>