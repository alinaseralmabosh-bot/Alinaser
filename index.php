<!DOCTYPE html>
<html>

<head>
 <meta charset="utf-8">
  <style>
    body{
      background:grey;  
    font-size:3px;
    }
    h6{
      background:skyblue;
      color:darkred;
      text-align:center;
      border-radius:5px;
      border:1px  solid lightcoral;
    }
    div{
      background:#28a745;
  color:white;
      text-align:center;
      border-radius:5px;
      border:1px solid skyblue;
    }
    p{
      background:blue;
      color:red;
      text-align:center;
      border-radius:5px;
      border:1px solid lightblue;
    }
    nav{
      background:steelblue;
      color:white;
      text-align:center;
      border-radius:5px;
    }
    h5{
      background: cadetblue;
      color:white;
      text-align:center;
      border-radius:5px;
      border:1px solid  #28a745;
    }
    ol{
      background:gray;
      color:white;
      text-align:center;
      border-radius:5px;
    }
    li{
      background:skyblue;
      border-radius:5px;
      border:1px solid orange;
    }
    ul{ color:white;
        
      background:blueviolet;
        border:1px solid blue;        border-radius:5px;
      }
    i{
      background:darkblue;
      color:red;
      text-align:center;
    }
    ul li{
 background:royalblue;
      text-align:center;
      
    }
  </style>
</head>

<body>

 
 <br>
<h6> ماهي مخرجات الكود التالي </h6>
 <?php 
  echo "<div>";
  
  echo "<pre>< select name=".'"year"><br>';
  echo "<p>";
  echo 'for($i=31;$i>=0;$i--){'."<br>";
  echo "</p>";
  echo  "echo  ";
  echo '"< option value='."'".'$i'."'".'> $i < /option>";';
  
 echo " <br>} <br> < /select></pre><br>";
  echo "</div>";
  echo "<h6>الناتج </h6>";



  echo "<nav>";
  echo '<select name="year">';
  for($i=31;$i>=0;$i--){
    echo "<option value="."'".'$i'."'"."> $i </option>";
    
  }
  echo "</select><br>";

echo "</nav><br>";


  
  echo "<h6> ماهي مخرجات التالي </h6>";
  echo "<div><pre>";
  echo '$name='."'sylvie ' or 'bruno';<br>";
  echo "<p>";
  echo "switch(".'$name){<br>';
  echo "</p>";
  echo "case 'sylvie':<br> case 'bruno':<br>";
  echo 'print("yes"<br>';
  echo "break;<br>";
  echo "defalut:<br>";
  echo 'print("no"<br>';
  echo "break;<br>} <br>";
  echo "</pre></div><br>";


  
  echo "<h6> الناتج </h6><br>";
  echo "<nav>";
  $name='sylvie'or 'bruno';
  switch($name){
    case 'sylvie':
    case 'bruno':
    print("yes");
    break;
    default:
    print("no");
    break;
  }
  echo "</nav><br>";

echo "<h6>ماهي مخرجات الكود التالي </h6>";
echo "<div><pre>";
echo "<br>".'$langs=array("Html","Css","Javascript","Ajax","Python","Ruby","MySQL ");';
  echo '<br> echo "< ul>";<br>';
  echo "<p>";
  echo 'for($i=0;$i'.'< count($langs);i++){';
  echo "</p>";
    echo "<br>";
  
  echo 'echo  "< li>".'.'$langs[$i]'.'"< /li>";';
  echo "<br>}<br>";
  echo "< /ul>";

  echo "</pre></div><br>";



  
  echo "<h6> الناتج </h6>";
  echo "<nav>";
$langs=array("Html","Css","Javascript ","Ajax","Python","Ruby","MySQL");
echo "<ul><br>";
  for($i=0;$i<count($langs);$i++){
    echo "<li>".$langs[$i]."</li>";
      
  }
  echo "<br></ul>";
  echo "</nav>";
  echo "<br>";


  echo "<h5> What DOCS PHP  stand for ? </h5>";
  echo "<br>";
  echo "<ol><br><i><li> i)personal Home page</li> ";
  echo "<li>ii) Hypertext preprocessor</li></i>";
  echo "<li> iii)  pretext Hypertext preprocessor</li>";
  echo "<li> iv)  preprocessor Home page </li><br> </ol>";
  echo "<ul><br>";
  echo "<li> Both i) and iii) </li>";
  echo  "<li>Both ii) and iv) </li>" ;
  echo "<li> Only ii)</li>";
  echo "<i><li> Both i) and ii)</li></i><br></ul>";
  echo " <h5>PHP files have a defeat  file extension  of ______ ?</h5>";
  echo "<ul><br>";
  echo "<li>.html</li>";
  echo "<li>.xml</li>
 <i> <li>.php</li></i>
  <li>.ph</li><br></ul>"; 
  echo "<h5>what should be the correct syntax to write a PHP code ? </h5>";
  echo "<ul><br>
  <li>< php> </li>
 <i> <li> < ? php ?></li></i>
  <li>< ? ?></li>
  <i><li>< ? php ?> </li></i><br>
  </ul>";
echo "<h5> Which of the following must be installed on your computer so as to run PHP script ? </h5>";
  echo "<pre><ol>
  <li>i) Adobe  Dreamweaver </li>
 <i> <li>ii) AXMPP </li>
  <li>iii) Apache and PHP </li>
  <li>iv) IIS</li></i>
  </ol></pre>";
  echo "<ul><br>
  <li> i) , ii) , iii) and iv) </li>
  <li>Only ii) </li>
  <li> ii) and iii) </li>
 <i> <li>ii) , iii) and iv)</li></i>
 <br> </ul>";
echo "<h5> Howe should we add a single line comment in our PHP code ?  </h5>";
  echo "<ul><br>
  <li>i) /?</li>
  <li>ii) //</li>
  <li>iii) # </li>
  <i><li>iv) /* */ </li></i>
  <br>
  </ul>";
  echo "<h5>What will be the output of the following PHP code ? </h5>";
  echo "<ol><pre>
  <li>< ? php  </li>";
 echo  "<li>".'$num = 1;'."</li>
  <li>".'$num1 = 2 ;'."</li>
  <li>".'print $num'.'"+" $num1 ;'."</li>
  <li> ?> </li>
  </pre></ol>";
  echo "<ul><br>
  <li> 3</li>
  <i>
  <li>1+2 </li>
  <li>1+2 </li>
  </i>
  <li>Error</li>
  <br>
  </ul>";
  echo "<h5>What will be output of the following PHP code ? </h5>";

echo "<ol><pre>
  <li>< ? php  </li>";
 echo  "<li>".'$num = "1";'."</li>
  <li>".'$num1 = "2" ;'."</li>
  <li>".'print $num'.'"+" $num1 ;'."</li>
  <li> ?> </li></pre>
  </ol>";

  
  echo "<ul><br>
  <i><li>3</li></i>
  <li>1+2</li>
  <li>Error</li>
  <li>12</li>
  <br>
  </ul>"; 
  echo "<h5> What of the following PHP statement".'/'."statements will story 111 in variable num ? </h5>";
  echo "<ol><pre>
  <li> i) int ".'$num'."=111;</li>
  <li>ii) int mum=111;</li>
 <i> <li>iii) ".'$num'."=111;</li></i>
  <li>iv) 111=".'$num;'." </li></pre>
  </ol>";
  echo "<ul>
  <br>
  <li>Both i) and ii) </li>
  <li>i) , ii) , iii) and iv) </li>
<i>  <li>Only iii) </li></i>
  <li>Only i) </li>
  <br>
  </ul>";
  echo "<h5>Howe to defined a function in PHP ? </h5>";
  echo "<ul>
  <br>
  <li>function { function body } </li>
  <li>date type  functionName(parameters){ function body} </li>
  <li>functionname(parameters){function body} </li>
 <i>  <li>function  functionname{function body} </li></i>
 <br> </ul>";
  echo "<h5> what type of function call is  used in line 8 in the following PHP code ?</h5>";
  echo "<ol><pre>
  <li> < ? php </li>
  <li>function calc(".'$price , $tax)'."</li>
  <li>{</li>
  <li>".'$total=$price+$tax;'."</li>
  <li>}</li>
  <li>".'$pricetag = 15 ;'."
  </li><li>".'$taxtag = 3 ;'."</li>
  <li>calc(".'$pricetag, $taxtag );'."</li>
  <li> ? > </li></pre>
  </ol>";
  echo "<ul><br>
  <i><li>Call By Value </li></i>
  <li>Call By Reference </li>
  <li>Default Rrgument Value</li>
  <li>Type Hinting </li><br>
  </ul>";
  
  echo "<h5>What of the following are valid function names ? </h5> ";
  echo "<ol><pre>
 <i>  <li>i) function()</li></i>
  <li>ii) Æ </li>
  <li>iii) .function() </li>
  <li>iv) ".'$function()'."</li></pre>
  </ol>";
  echo "<ul><br>
  <i><li> Only  i)</li> </i>
  <li>Only  ii) </li>
  <li>i) and ii) </li>
  <li>iii) and iv) </li>
  <br>
  </ul>";
  echo "<h5> What will be the of  the following PHP code ?</h5>";
  echo "<ol><pre>
  <li>< ? php </li>
  <li>function calc".'($price, tax="")'."</li>
  <li>{</li>
  <li>".'$total=$price($price*$tax);'."</li>
  <li>echo ".'"$total";'."</li>
  <li>}</li> 
  <li>calc(42);</li>
  <li>? ></li> </pre>
  </ol>";
  echo "<ul><br>
  <i><li>Error</li></i>
  <li>0</li>
  <li>42</li>
  <li>84</li><br>
  </ul>";
  echo "<h5>What will be the output of the following PHP code ? </h5>";
  echo "<ol><pre>
  <li>< ? php </li>
  <li>function a()</li>
  <li>{</li>
  <li> function b()</li>
  <li>{</li>
  <li>echo 'I am b';</li>
  <li>}</li>
  <li>echo 'I. am a ;'</li>
  <li>}</li>
  <li>b();</li>
  <li>a();</li>
  <li> ? > </li></pre>
  </ol>";
  echo "<ul><br>
  <li>l am a </li>
  <li>l am bl am a</li>
<i>  <li>Error</li></i>
  <li>l am a Error</li><br>
  </ul>"; 
  echo "<h5> what will be the output of  the following PHP code ? </h5>";
  echo "<ol><pre>
  <li>< ? php </li>
  <li>".'$opt2="blabla"'."</li>
  <li>function foo(".'$opt1)'."</li>
  <li>{</li>
  <li>echo ".'$opt1;'."</li>
  <li>echo ".'$opt2;'." </li>
  <li>{</li>
  <li>foo(".'"hello");'."</li>
  
  <li> ? ></li></pre>
  </ol>";
  echo "<ul><br>
  <li>hellowblabla</li>
  <i><li>Error</li></i>
  <li>hellow</li>
  <li>hellowblablablabla</li><br>
  </ul>";
echo "<h5> A function in PHP which  starts with ___ (double underscore) is known as ____?</h5>";
  echo "<ul><br>
 <i> <li>Magic Function</li></i>
  <li>Inbuilt Function </li>
  <li>Default Function</li>
  <li>User Defined Function</li>
  <br>
  </ul>";
  echo "<h5>What  will  be the output  of the following PHP code?</h5>";
  echo "<ol><pre>
  <li>< ? php </li>
  <li>function foo(".'$msg)'."</li>
  <li>{</li>
  <li>echo ".'$msg;'."</li>
  <li>}</li>
  <li>".'$var1="foot";'."</li>
  <li>".'$var1("will this work");'."</li>
  <li>? ></li></pre>
  </ol>";
  echo "<ul><br>
  <li>Error</li>
  <li>".'$msg'."</li>
  <li>0</li>
  <i><li>will this work </li></i><br>
  </ul>";
  echo "<h5> What will be the output of the following PHP code ? </h5>";
  echo "<ol><pre>
  <li>< ? php </li>
  <li>echo chr(52);</li>
  <li>? ></li></pre>
  </ol>";
  echo "<ul><br>
  <li>1</li>
  <li>2</li>
  <li>3</li>
 <i> <li>4</li></i><br>
  </ul>";
  echo "<h5>What will be the output of the following PHP code ? </h5>";
  echo "<ol><pre>
  <li>< ? php </li>
  <li>echo chr(".'"hi");'."</li> 
  <li>? ></li></pre>
  </ol>";
  echo "<ul><br>
  <li>106</li>
  <li>103</li>
  <i><li>104</li></i>
  <li>209</li><br>
  </ul>";

  
  ?>

</body>

</html>