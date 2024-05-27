<script>
  function opennumber(val) {

    if (val == 'Oral Presenter' || val == 'Poster Presenter') {
      document.getElementById('inputabnum').style.display = 'contents';
    }
    else {
      document.getElementById('inputabnum').style.display = 'none';
      document.getElementById('ab-number').value='';
    }
  }

  function openamount(val) {

    var date = new Date();
    var p;
    var t = <?= json_encode($datepro) ?>;
    var datepro = new Date(t);
    console.log(t);
    console.log(datepro);
    var sss = [];
    sss = <?= json_encode($data) ?>;
    for (var i = 0; i < sss.length; i++) {
      if (sss[i][0] == val) {
        if (date < datepro) {
          p = sss[i][4];
        } else {
          p = sss[i][5];
        }
      }

    }
    console.log(val);
    console.log(p);

    const amount = document.getElementById('amount');
    const resultDiv = document.getElementById('result');
    amount.value = 1;

    if (val == '1' || val == '2' || val == '5') {
      document.getElementById('myDiv').style.display = 'none';
      resultDiv.textContent = ` : ${1 * p} `;
    }

    if (val == '3') {
      document.getElementById('myDiv').style.display = 'contents';
      resultDiv.textContent = ` : ${1 * p} `;
      amount.addEventListener('input', function () {
        const number = parseFloat(amount.value);
        if (!isNaN(number)) {
          // ทำการคำนวณหรือแสดงผลตามต้องการ
          resultDiv.textContent = ` : ${number * p} `;
        }
      });
    }

    if (val == '4') {
      document.getElementById('myDiv').style.display = 'contents';
      resultDiv.textContent = ` : ${1 * p} `;
      amount.addEventListener('input', function () {
        const number = parseFloat(amount.value);
        // ทำการคำนวณหรือแสดงผลตามต้องการ
        resultDiv.textContent = ` : ${number * p} `;
      });
    }
  } 
</script>