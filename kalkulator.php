<!DOCTYPE html>
<html>
    <head>
        <title>Simple Calculator</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container" data-tilt data-tilt-full-page-listening data-tilt-axis="x">
            <form class="calculator" name="calc">
              <input type="text" readonly class="value" name="txt"/>
              <span class="num clear" onclick="calc.txt.value = ''">c</span>
              <span class="num" onclick="document.calc.txt.value += '**'">^</span>
              <span class="num" onclick="document.calc.txt.value += '*'">x</span>
              <span class="num" onclick="document.calc.txt.value += '7'">7</span>
              <span class="num" onclick="document.calc.txt.value += '8'">8</span>
              <span class="num" onclick="document.calc.txt.value += '9'">9</span>
              <span class="num" onclick="document.calc.txt.value += '-'">-</span>
              <span class="num" onclick="document.calc.txt.value += '4'">4</span>
              <span class="num" onclick="document.calc.txt.value += '5'">5</span>
              <span class="num" onclick="document.calc.txt.value += '6'">6</span>
              <span class="num" onclick="document.calc.txt.value += '+'">+</span>
              <span class="num" onclick="document.calc.txt.value += '1'">1</span>
              <span class="num" onclick="document.calc.txt.value += '2'">2</span>
              <span class="num" onclick="document.calc.txt.value += '3'">3</span>
              <span class="num" onclick="document.calc.txt.value += '/'">:</span>
              <span class="num" onclick="document.calc.txt.value += '0'">0</span>
              <span class="num" onclick="document.calc.txt.value += '00'">00</span>
              <span class="num" onclick="document.calc.txt.value += '.'">.</span>
              <span class="num" onclick="document.calc.txt.value += 'Math.sqrt('">√</span>
              <span class="num" onclick="document.calc.txt.value += 'Math.sqrt('">%</span>
              <span class="num" onclick="document.calc.txt.value += '('">(</span>
              <span class="num" onclick="document.calc.txt.value += ')'">)</span>
              <span class="num equal" onclick="document.calc.txt.value = eval(calc.txt.value)">=</span>
            </form>
          </div>    
          
          <script>
        function calculate() {
            try {
                // Replace '√' with 'Math.sqrt(', '%' with '/100', and '^' with '**'
                let expression = document.calc.txt.value.replace(/√/g, 'Math.sqrt(').replace(/%/g, '/100').replace(/\^/g, '**');
                // Evaluate the expression
                document.calc.txt.value = eval(expression);
            } catch (error) {
                document.calc.txt.value = 'Error';
            }
        }
    </script>

          
    </body>
</html>