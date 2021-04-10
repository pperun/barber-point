<?php
if($_GET['beard']) echo "<form class='modal-content animate' action=\"index.php?page={$_GET['page']}&beard={$_GET['beard']}\" method=\"post\">";
else echo "<form class='modal-content animate' action=\"index.php?page={$_GET['page']}&haircut={$_GET['haircut']}\" method=\"post\">";
                    echo "<div class=\"container\">
                        <label for=\"uname\">ПІБ</label>
                        <input type=\"text\" placeholder=\"Ваш ПІБ\" name=\"uname\" required>

                        <label for=\"psw\">Номер телефону</label>
                        <input type=\"text\" placeholder=\"Ваш номер телефону\" name=\"psw\" required>

                        <button type=\"submit\" onclick=\"document.getElementById('id01').style.display='none'\">Записатись</button>
                    </div>

                    <div class=\"container\">
                        <button type=\"button\" onclick=\"document.getElementById('id01').style.display='none'\" class=\"cancelbtn\">Відміна</button>
                    </div>
                </form>";
?>
