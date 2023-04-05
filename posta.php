<!DOCTYPE html>
<html lang="ru_RU"> 
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" href="favicon.ico" type="image/x-icon" />
<style>
@import url('https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&display=swap');
</style>


	<title></title>
	<link rel="stylesheet" type="text/css" href="posta_php.css">
</head>
<body>
<div class="textstyle1">
<div id="container_53797471"><div id="container_53797471_padding" ><div class="textstyle2"></div>
<div class="textstyle1"><div id="text_250423ca"><div class="textstyle1">  <span class="textstyle3">RESTAURANT</span>
</div>
<div class="textstyle2"></div>
</div><div id="text_24e3eb05"><div class="textstyle1">  <span class="textstyle4">BAR CAFE</span>
</div>
<div class="textstyle2"></div>
</div></div>
<div style="clear:both"></div></div></div><div id="container_650abe15"><div id="container_650abe15_padding" ><div class="textstyle5"><div id="menu_7d35d100"><div  id="menu_7d35d100_menualignmentwrapper" ><div  class="menuholder1"><a href="javascript:void(0);">
	<div id="menuentry_ee07095"  class="menustyle1 menu_7d35d100_mainMenuEntry mobileEntry">
		<div class="menuentry_text1">
  <span class="textstyle6">≡</span>
		</div>
	</div>
</a>
<a href="index.html" style="text-decoration:none">
	<div id="menuentry_71037a78"  class="menustyle1 menu_7d35d100_mainMenuEntry normalEntry">
		<div class="menuentry_text2">
  <span class="textstyle7">Главная</span>
		</div>
	</div>
</a>
<a href="menu.html" style="text-decoration:none">
	<div id="menuentry_53d841d1"  class="menustyle2 menu_7d35d100_mainMenuEntry normalEntry">
		<div class="menuentry_text2">
  <span class="textstyle7">Меню</span>
		</div>
	</div>
</a>
<a href="javascript:void(0);">
	<div id="menuentry_495230ef"  class="menustyle3 menu_7d35d100_mainMenuEntry normalEntry">
		<div class="menuentry_text2">
  <span class="textstyle7">Контакты </span>
  <span class="textstyle8">▼</span>
		</div>
	</div>
</a>

	<script type="text/javascript" src="rc_images/wsp_menu.js"></script>
	<script type="text/javascript">
		var js_menu_7d35d100= new wsp_menu('menu_7d35d100', 'menu_7d35d100', 25, "fadeMenus moveHeight ");

		js_menu_7d35d100.createMenuForItem('menuentry_ee07095', ["  <span class=\"textstyle9\">Главная</span> ", 'index.html', '',
		                                   "  <span class=\"textstyle9\">Меню</span> ", 'menu.html', '',
		                                   "  <span class=\"textstyle9\">Контакты ▼</span> ", 'javascript:void(0);', '',
		                                   "  <span class=\"textstyle9\">   Почта</span> ", 'posta.php', '',
		                                   "  <span class=\"textstyle9\">   Контакты</span> ", 'contact.html', '']);
		js_menu_7d35d100.createMenuForItem('menuentry_71037a78', []);
		js_menu_7d35d100.createMenuForItem('menuentry_53d841d1', []);
		js_menu_7d35d100.createMenuForItem('menuentry_495230ef', ["  <span class=\"textstyle9\">Почта</span> ", 'posta.php', '',
		                                   "  <span class=\"textstyle9\">Контакты</span> ", 'contact.html', '']);

	</script>
</div></div></div></div>
<div style="clear:both"></div></div></div><div  id="placeh_450824da" >
  <div class="textstyle2">
<div id="container_426fe36"><div id="container_426fe36_padding" ><div class="textstyle2"><form  action="posta.php"
enctype="application/x-www-form-urlencoded"
method="POST" id="form_7d022765"><div id="form_7d022765_padding" ><div class="textstyle2"><span class="textstyle10">Имя: </span><span class="textstyle11">*</span><span class="textstyle12"><br/></span><input type="text" value="" title="Введите Имя" name="TextEdit1" required="required"  id="edit_53fe67b0" >
<span class="textstyle12"><br/><br/></span><span class="textstyle10">Телефон: </span><span class="textstyle11">*</span><span class="textstyle12"><br/></span><input type="text" value="" title="Введите Телефон" name="TextEdit2" required="required"  id="edit_71fbe97c" >
<span class="textstyle12"><br/><br/></span><input type="hidden" value="Проверка Формы" name="HiddenFormField1" id="field_80e4e6e" >
<span class="textstyle12"><br/><br/></span><input type="date" name="DatePicker1"  id="datepicker_e90d421" />
<span class="textstyle12"><br/><br/></span><input name="Button1" type="submit" value="Отправить" title=""  id="button_714e5a50" >
</div>
<div style="clear:both"></div></div></form><span class="textstyle12">  </span><?PHP
$text = "";
foreach($_POST as $name => $value)
{
   $text .= "$name : $value\n";
}
if ($text != "")
{
  echo 'Thanks for contacting us.';
  mail("youremail@example.com", "Contact form request", $text);
}
?></div>
<div style="clear:both"></div></div></div>    </div>
</div>
<div id="container_12dee79e"><div id="container_12dee79e_padding" ><div class="textstyle1"><span class="textstyle13">More info:</span><span class="textstyle14"><br/></span><span class="textstyle15"><br/><br/></span><div id="container_79dff3b4"><div id="container_79dff3b4_padding" ><div class="textstyle1"><span class="textstyle16">More information</span><span class="textstyle15"><br/><br/>● Veniam quis<br/>● Voluptate velit<br/>● Officia</span></div>
<div class="textstyle2"></div>
</div></div><div id="container_2bc926a0"><div id="container_2bc926a0_padding" ><div class="textstyle1"><span class="textstyle16">How to Find us</span><span class="textstyle15"><br/><br/>● Partiator Nulla<br/>● Sint obcaecat<br/>● Id est laborum</span></div>
<div class="textstyle2"></div>
</div></div><div id="container_15f9c727"><div id="container_15f9c727_padding" ><div class="textstyle1"><span class="textstyle16">Social Media</span><span class="textstyle15"><br/><br/>● Twitter<br/>● Facebook<br/>● Other</span></div>
<div class="textstyle2"></div>
</div></div></div>
<div class="textstyle2"><span class="textstyle12"><br/></span><style>
    .btn-up {
      position: fixed;
      background-color: #1233d2c2;
      right: 20px;
      bottom: 30px;
      border-radius: 25px;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: opacity 0.15s ease-in-out, transform 0.3s ease-in-out;
      color: #fff;
      width: 45px;
      height: 45px;
      opacity: 1;
      transform: translateY(0);
    }

    .btn-up_hide {
      display: none;
    }

    .btn-up_hiding {
      opacity: 0;
      transform: translateY(100px);
    }

    .btn-up-icon {
      width: 40px;
      height: 40px;
      fill: currentcolor;
    }

    @media (hover: hover) and (pointer: fine) {
      .btn-up:hover {
        background-color: #3900efd6;
      }
    }
</style>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="arrow-up-short" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z" />
    </symbol>
  </svg>

  <div class="btn-up btn-up_hide">
    <svg class="btn-up-icon" role="img" aria-label="Прокрутить страницу к началу">
      <use xlink:href="#arrow-up-short"></use>
    </svg>
  </div>

  <script>
    const btnUp = {
      el: document.querySelector('.btn-up'),
      scrolling: false,
      show() {
        if (this.el.classList.contains('btn-up_hide') && !this.el.classList.contains('btn-up_hiding')) {
          this.el.classList.remove('btn-up_hide');
          this.el.classList.add('btn-up_hiding');
          window.setTimeout(() => {
            this.el.classList.remove('btn-up_hiding');
          }, 300);
        }
      },
      hide() {
        if (!this.el.classList.contains('btn-up_hide') && !this.el.classList.contains('btn-up_hiding')) {
          this.el.classList.add('btn-up_hiding');
          window.setTimeout(() => {
            this.el.classList.add('btn-up_hide');
            this.el.classList.remove('btn-up_hiding');
          }, 300);
        }
      },
      addEventListener() {
        // при прокрутке окна (window)
        window.addEventListener('scroll', () => {
          const scrollY = window.scrollY || document.documentElement.scrollTop;
          if (this.scrolling && scrollY > 0) {
            return;
          }
          this.scrolling = false;
          // если пользователь прокрутил страницу более чем на 200px
          if (scrollY > 200) {
            // сделаем кнопку .btn-up видимой
            this.show();
          } else {
            // иначе скроем кнопку .btn-up
            this.hide();
          }
        });
        // при нажатии на кнопку .btn-up
        document.querySelector('.btn-up').onclick = () => {
          this.scrolling = true;
          this.hide();
          // переместиться в верхнюю часть страницы
          window.scrollTo({
            top: 0,
            left: 0,
            behavior: 'smooth'
          });
        }
      }
    }

    btnUp.addEventListener();
  </script></div>
<div style="clear:both"></div></div></div>  </div>
</body>
</html>