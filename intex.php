<?php
$result="";
class calculator
{
    var $a;
    var $b;
    function checkoperation(operator)
    {
        switch(operator)
        {
            case '+':
            return $this->a+$this->b;
            break;
             case '-':
            return $this->a-$this->b;
            break;
             case '*':
            return $this->*+$this->b;
            break;
             case '/':
            return $this->a/$this->b;
            break;

        }
    }
}
default:
}
}
function getresult($a,$b,$c)
{
    $this->=$a;
    $this->=$b;
    return $this->check operator($c);
}
}
$cal=new calculator();
if(isset($_POST['sumbit']))
[
    $result=$cal->getresult($_POST['n1'],$_POST['n2'],$_POST['op'])
}
?>
<form method="POST">
<table align="center">
<tr>
<td><strong>
<?php
echo $result;
?>
</strong></td></tr>
<tr>
<td>Enter 1st number</td>
<td><input type="text" name="n1"></td>
</tr>
<tr>
<td>Select operator</td>
<td><select name="op">
<option value='+'></option>
<option value='-'></option>
<option value='*'></option>
<option value='/'></option>
</select></td></tr>
<tr>
<td><input type="submit" name="submit" value=" = ">
</td>
</tr>
</table>
</form>
