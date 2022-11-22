<html>

<head>
    <title></title>
</head>

<body>

    <form name="form" onsubmit="return validateForm()">

        Computer Number:<br>
        <input type="text" name="Computer" required><br>

        <p>How much is your profit?

            <input id="id1" name="id1" required>
            <button type="button" onclick="myFunction()">My Answer</button>
            <button type="button" id="btn1" onclick="Solution()" style="display:none;">Solution</button>
        </p>

        <p id="Q1"></p>

        <script>
            var errosCount = 0;
  function myFunction() {
    var x, text;
    x = document.getElementById("id1").value;
   
    if (isNaN(x) || x != 100) {
        text = "Incorrect"; document.getElementById("Q1").style.color = "red";errosCount++;
    } else {
        text = "Correct"; document.getElementById("Q1").style.color = "green";
    }
    document.getElementById("Q1").innerHTML = text;
         if(errosCount === 3){
        errosCount = 0;
        document.getElementById('btn1').style.display = 'block';
        document.getElementById("Q1").innerHTML = '';
      } else {
        document.getElementById('btn1').style.display = 'none';        
      } 
}
function Solution(){
  text = "(P - w) * q<sub>o</sub> - I = (53 - 43) * 30 - 200 = 100";  document.getElementById("Q1").style.color = "red";
  document.getElementById("Q1").innerHTML = text;
}      
        </script>

        <input type="submit" value="Submit">

    </form>

    <script>
        function validateForm() {
    var q = document.forms["my form"]["Computer"].value;
    if (q == "") {
        alert("Computer Number is Missing!");
        return false;}
  var w = document.forms["my form"]["id1"].value;
    if (w != "100") {
        alert("Question 1 is Incorrect!");
        return false;}
  
}
    </script>

</body>

</html>