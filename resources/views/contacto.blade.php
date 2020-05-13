@extends('layouts.master')

@section('contenido')
<div class="right custom-social">
    <a href="{{URL::to('https://twitter.com/Blogarmariomar1')}}"><img class='twitter' src={{asset('imagenes/twitter.png')}} alt="Twitter"></a>
    <a href="{{URL::to('https://www.facebook.com/maria.acostaprieto.3')}}"><img class='facebook' src={{asset('imagenes/facebook.png')}} alt="Facebook"></a>
    <a href="{{URL::to('https://www.instagram.com/blogarmariomaria/?hl=es')}}"><img class='instagram' src={{asset('imagenes/instagram.png')}} alt="Instagram"></a>
</div>
<div>    
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Iniciar sesión</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    El armario de Maria
                </div>
                <nav><ul>
                    <li><a href="{{ url('index') }}">Inicio</a></li>
                     <li><a href="#">Categorias</a>
                        <ul><li><a href="{{ url('belleza') }}">Belleza</a></li>
                            <li><a href="{{ url('moda') }}">Moda</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('acercade') }}">Acerca de</a></li>
                    <li><a href="{{ url('contacto') }}">Contacto</a></li>
             </ul>
             </nav>
            </div>
        </div>

<h1 class="entry-title" itemprop="headline">Contacto</h1> 
<center>
    <p>ENVÍE POR CORREO ELECTRÓNICO AQUÍ PARA CONSULTAS GENERALES</p>
</center>
<p style="text-align: center;">
<u>
<strong>
        <a href="mailto:blogarmariomaria@gmail.com">blogarmariomaria@gmail.com</a>
</strong>
</u>
</p>

<p style="text-align: center;">
<img class="alignnone size-full wp-image-32322" src="{{ asset('imagenes/fotos/apuesta.jpg') }}" alt="" width="500" height="550">
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>


<!--INSTAGRAM-->
<div class="instagram">
<section id="text-6" class="widget widget_text">
    <div class="widget-wrap">			
        <div class="textwidget">
            <div id="sb_instagram" class="sbi sbi_col_6  sbi_width_resp sbi_disable_mobile sbi_medium" style="padding-bottom: 2px;width: 100%;" data-feedid="sbi_6540931#6" data-res="auto" data-cols="6" data-num="6" data-shortcode-atts="{}" data-sbi-index="1">
            <div class="sb_instagram_header " style="padding: 1px; margin-bottom: 10px;padding-bottom: 0;">
                <a href="https://www.instagram.com/blogarmariomaria/?hl=es" target="_blank" rel="noopener noreferrer" title="@blogarmariomaria" class="sbi_header_link"><p></p>
            <div class="sbi_header_text sbi_no_bio">
<h3>BLOGARMARIOMARIA</h3>
<p></p>
</div>
<div class="sbi_header_img" data-avatar-url="https://scontent.cdninstagram.com/vp/980547416da20a1747b0aa0d28f652de/5E8B3A06/t51.2885-19/s150x150/70887777_557107298191388_7879469880808833024_n.jpg?_nc_ht=scontent.cdninstagram.com">
<div class="sbi_header_img_hover">
     <svg class="sbi_new_logo fa-instagram fa-w-14" aria-hidden="true" data-fa-processed="" data-prefix="fab" data-icon="instagram" role="img" viewBox="0 0 448 512">
	                <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
	            </svg></div>
<p>            <img src="" alt="/public/imagenes/fotos/banco.jpg" width="50" height="50">
        </p></div>
</a><p><a href="https://www.instagram.com/blogarmariomaria/?hl=es" target="_blank" rel="noopener noreferrer" title="@mariannnan" class="sbi_header_link">    </a>
</p></div>
<div id="sbi_images" style="padding: 1px;">
<!--Primera foto-->
<div class="sbi_item sbi_type_carousel" id="sbi_2184940905247754526_6540931" data-date="1574685274">
<div class="sbi_photo_wrap">
        <a class="sbi_photo sbi_imgLiquid_bgSize sbi_imgLiquid_ready" href="https://www.instagram.com/p/B5VtffGJDLH/" target="_blank" rel="noopener noreferrer" data-full-res="https://scontent.cdninstagram.com/v/t51.2885-15/sh0.08/e35/p640x640/75580689_555489148582764_2976947909632347316_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;oh=7098ea40a7b67000338b51245b11ce69&amp;oe=5E886C32" data-img-src-set="{&quot;150&quot;:&quot;https:\/\/scontent.cdninstagram.com\/v\/t51.2885-15\/e35\/c0.135.1080.1080a\/s150x150\/75580689_555489148582764_2976947909632347316_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;oh=cc2499cf55c6d3f3f8d3e8332de33339&amp;oe=5E80DB03&quot;,&quot;320&quot;:&quot;https:\/\/scontent.cdninstagram.com\/v\/t51.2885-15\/e35\/p320x320\/75580689_555489148582764_2976947909632347316_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;oh=38fd098e527479339df20ace66d05e14&amp;oe=5E8BEF65&quot;,&quot;640&quot;:&quot;https:\/\/scontent.cdninstagram.com\/v\/t51.2885-15\/sh0.08\/e35\/p640x640\/75580689_555489148582764_2976947909632347316_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;oh=7098ea40a7b67000338b51245b11ce69&amp;oe=5E886C32&quot;}" style="height: 222px; background-image: url(&quot;https://mariannan.com/wp-content/uploads/sb-instagram-feed-images/2184940905247754526_6540931low.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><br>
            <span class="sbi-screenreader">Instagram post 2184940905247754526_6540931</span><br>
            <svg class="svg-inline--fa fa-clone fa-w-16 sbi_lightbox_carousel_icon" aria-hidden="true" data-fa-proƒcessed="" data-prefix="far" data-icon="clone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
	                <path fill="currentColor" d="M464 0H144c-26.51 0-48 21.49-48 48v48H48c-26.51 0-48 21.49-48 48v320c0 26.51 21.49 48 48 48h320c26.51 0 48-21.49 48-48v-48h48c26.51 0 48-21.49 48-48V48c0-26.51-21.49-48-48-48zM362 464H54a6 6 0 0 1-6-6V150a6 6 0 0 1 6-6h42v224c0 26.51 21.49 48 48 48h224v42a6 6 0 0 1-6 6zm96-96H150a6 6 0 0 1-6-6V54a6 6 0 0 1 6-6h308a6 6 0 0 1 6 6v308a6 6 0 0 1-6 6z"></path>
	            </svg>	                   
                 <img src="/public/imagenes/fotos/ver-2019.jpg" alt="SUMMER" style="display: none;"><br>
        </a>
    </div>
</div>

<!--Segunda foto-->
<div class="sbi_item sbi_type_carousel" id="sbi_2182226636232149297_6540931" data-date="1574361708">
<div class="sbi_photo_wrap">
        <a class="sbi_photo sbi_imgLiquid_bgSize sbi_imgLiquid_ready" href="https://www.instagram.com/p/B5V5b7IJ28P/" target="_blank" rel="noopener noreferrer" data-full-res="https://scontent.cdninstagram.com/v/t51.2885-15/sh0.08/e35/p640x640/72196962_3127379577332928_5058078207239160893_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;oh=38bdb5e06a88e52c7f8d9b1a32b13322&amp;oe=5E73027F" data-img-src-set="{&quot;150&quot;:&quot;https:\/\/scontent.cdninstagram.com\/v\/t51.2885-15\/e35\/c0.135.1080.1080a\/s150x150\/72196962_3127379577332928_5058078207239160893_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;oh=a5547136df7baadf0510cc792a22d508&amp;oe=5E827B32&quot;,&quot;320&quot;:&quot;https:\/\/scontent.cdninstagram.com\/v\/t51.2885-15\/e35\/p320x320\/72196962_3127379577332928_5058078207239160893_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;oh=c110d302b0a33f72c9d94794f544819b&amp;oe=5E6E3882&quot;,&quot;640&quot;:&quot;https:\/\/scontent.cdninstagram.com\/v\/t51.2885-15\/sh0.08\/e35\/p640x640\/72196962_3127379577332928_5058078207239160893_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;oh=38bdb5e06a88e52c7f8d9b1a32b13322&amp;oe=5E73027F&quot;}" style="height: 222px; background-image: url(&quot;https://mariannan.com/wp-content/uploads/sb-instagram-feed-images/2182226636232149297_6540931low.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><br>
            <span class="sbi-screenreader">Instagram post 2182226636232149297_6540931</span><br>
            <svg class="svg-inline--fa fa-clone fa-w-16 sbi_lightbox_carousel_icon" aria-hidden="true" data-fa-proƒcessed="" data-prefix="far" data-icon="clone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
	                <path fill="currentColor" d="M464 0H144c-26.51 0-48 21.49-48 48v48H48c-26.51 0-48 21.49-48 48v320c0 26.51 21.49 48 48 48h320c26.51 0 48-21.49 48-48v-48h48c26.51 0 48-21.49 48-48V48c0-26.51-21.49-48-48-48zM362 464H54a6 6 0 0 1-6-6V150a6 6 0 0 1 6-6h42v224c0 26.51 21.49 48 48 48h224v42a6 6 0 0 1-6 6zm96-96H150a6 6 0 0 1-6-6V54a6 6 0 0 1 6-6h308a6 6 0 0 1 6 6v308a6 6 0 0 1-6 6z"></path>
	            </svg>	                   
                 <img src="/public/imagenes/fotos/otoño.jpg" alt="OTOÑO" style="display: none;"><br>
        </a>
    </div>
</div>

<!--Tercera foto-->
<!--
<div class="sbi_item sbi_type_carousel" id="sbi_2181463075922895025_6540931" data-date="1574270685">
<div class="sbi_photo_wrap">
        <a class="sbi_photo sbi_imgLiquid_bgSize sbi_imgLiquid_ready" href="https://www.instagram.com/p/B5V5b7IJ28P/" target="_blank" rel="noopener noreferrer" data-full-res="https://scontent.cdninstagram.com/v/t51.2885-15/sh0.08/e35/p640x640/76938864_154526469243162_768850076055428211_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;oh=d2aadf857209b1ea9a2b4d478992fd37&amp;oe=5E67C7FD" data-img-src-set="{&quot;150&quot;:&quot;https:\/\/scontent.cdninstagram.com\/v\/t51.2885-15\/e35\/c0.135.1080.1080a\/s150x150\/76938864_154526469243162_768850076055428211_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;oh=491fc7780ba8c3afe2c997dacb4654c1&amp;oe=5E842F7D&quot;,&quot;320&quot;:&quot;https:\/\/scontent.cdninstagram.com\/v\/t51.2885-15\/e35\/p320x320\/76938864_154526469243162_768850076055428211_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;oh=c7de598353ec63d2ca137f939261bbf9&amp;oe=5E866F11&quot;,&quot;640&quot;:&quot;https:\/\/scontent.cdninstagram.com\/v\/t51.2885-15\/sh0.08\/e35\/p640x640\/76938864_154526469243162_768850076055428211_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;oh=d2aadf857209b1ea9a2b4d478992fd37&amp;oe=5E67C7FD&quot;}" style="height: 222px; background-image: url(&quot;https://mariannan.com/wp-content/uploads/sb-instagram-feed-images/2181463075922895025_6540931low.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><br>
            <span class="sbi-screenreader">Instagram post 2181463075922895025_6540931</span><br>
            <svg class="svg-inline--fa fa-clone fa-w-16 sbi_lightbox_carousel_icon" aria-hidden="true" data-fa-proƒcessed="" data-prefix="far" data-icon="clone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
	                <path fill="currentColor" d="M464 0H144c-26.51 0-48 21.49-48 48v48H48c-26.51 0-48 21.49-48 48v320c0 26.51 21.49 48 48 48h320c26.51 0 48-21.49 48-48v-48h48c26.51 0 48-21.49 48-48V48c0-26.51-21.49-48-48-48zM362 464H54a6 6 0 0 1-6-6V150a6 6 0 0 1 6-6h42v224c0 26.51 21.49 48 48 48h224v42a6 6 0 0 1-6 6zm96-96H150a6 6 0 0 1-6-6V54a6 6 0 0 1 6-6h308a6 6 0 0 1 6 6v308a6 6 0 0 1-6 6z"></path>
	            </svg>	                    <img src="https://mariannan.com/wp-content/uploads/sb-instagram-feed-images/2181463075922895025_6540931low.jpg" alt="Started going lighter with my hair today! 💛 The base is still my natural hair color, now with lots of highlights and a cold frosty shade. ❄ (Step two could be going even lighter, but I'm loving this for now. 🥰) I wish my hair always looked like they do after appointment at @hannedoeshair 👉🏻" style="display: none;"><br>
        </a>
    </div>
</div>
-->
<!--Cuarta foto-->
<!--
<div class="sbi_item sbi_type_carousel" id="sbi_2179378782283091479_6540931" data-date="1574022218">
<div class="sbi_photo_wrap">
        <a class="sbi_photo sbi_imgLiquid_bgSize sbi_imgLiquid_ready" href="https://www.instagram.com/p/B4-tXSlAc4X/" target="_blank" rel="noopener noreferrer" data-full-res="https://scontent.cdninstagram.com/v/t51.2885-15/sh0.08/e35/p640x640/73174419_415487062727057_4017826594557092751_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;oh=6f71c51b92e07d6105a07aee25c5f1d7&amp;oe=5E7A01EB" data-img-src-set="{&quot;150&quot;:&quot;https:\/\/scontent.cdninstagram.com\/v\/t51.2885-15\/e35\/c0.135.1080.1080a\/s150x150\/73174419_415487062727057_4017826594557092751_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;oh=98a51108d36664b37f2e8b0fe514e40b&amp;oe=5E69F4DA&quot;,&quot;320&quot;:&quot;https:\/\/scontent.cdninstagram.com\/v\/t51.2885-15\/e35\/p320x320\/73174419_415487062727057_4017826594557092751_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;oh=eeae6eff2d31108036a891b55a870755&amp;oe=5E7B6BBC&quot;,&quot;640&quot;:&quot;https:\/\/scontent.cdninstagram.com\/v\/t51.2885-15\/sh0.08\/e35\/p640x640\/73174419_415487062727057_4017826594557092751_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;oh=6f71c51b92e07d6105a07aee25c5f1d7&amp;oe=5E7A01EB&quot;}" style="height: 222px; background-image: url(&quot;https://mariannan.com/wp-content/uploads/sb-instagram-feed-images/2179378782283091479_6540931low.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><br>
            <span class="sbi-screenreader">Instagram post 2179378782283091479_6540931</span><br>
            <svg class="svg-inline--fa fa-clone fa-w-16 sbi_lightbox_carousel_icon" aria-hidden="true" data-fa-proƒcessed="" data-prefix="far" data-icon="clone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
	                <path fill="currentColor" d="M464 0H144c-26.51 0-48 21.49-48 48v48H48c-26.51 0-48 21.49-48 48v320c0 26.51 21.49 48 48 48h320c26.51 0 48-21.49 48-48v-48h48c26.51 0 48-21.49 48-48V48c0-26.51-21.49-48-48-48zM362 464H54a6 6 0 0 1-6-6V150a6 6 0 0 1 6-6h42v224c0 26.51 21.49 48 48 48h224v42a6 6 0 0 1-6 6zm96-96H150a6 6 0 0 1-6-6V54a6 6 0 0 1 6-6h308a6 6 0 0 1 6 6v308a6 6 0 0 1-6 6z"></path>
	            </svg>	                   
                 <img src="https://mariannan.com/wp-content/uploads/sb-instagram-feed-images/2179378782283091479_6540931low.jpg" alt="In paid collaboration with @bubbleroom | Glitter season is here - pre-Christmas parties &amp; soon after NYE! 💫 Win 500€ to shop at @bubbleroom (all brands) - How to compete?
♡ Follow me &amp; @bubbleroom on IG
♡ Like this post &amp; comment below your favorite party emoji
♡ I'll announce the winner next Sunday on my stories! 🥰" style="display: none;"><br>
        </a>
    </div>
</div>
-->
<!--Quinta foto-->
<!--
<div class="sbi_item sbi_type_image" id="sbi_2177737236269777895_6540931" data-date="1573826530">
<div class="sbi_photo_wrap">
        <a class="sbi_photo sbi_imgLiquid_bgSize sbi_imgLiquid_ready" href="https://www.instagram.com/p/B444HpuAEPn/" target="_blank" rel="noopener noreferrer" data-full-res="https://scontent.cdninstagram.com/v/t51.2885-15/sh0.08/e35/p640x640/77174546_568678197008911_1452491329564141520_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;oh=9cdab3f0e63e4796037c5efb7bdedcd3&amp;oe=5E852700" data-img-src-set="{&quot;150&quot;:&quot;https:\/\/scontent.cdninstagram.com\/v\/t51.2885-15\/e35\/c0.135.1080.1080a\/s150x150\/77174546_568678197008911_1452491329564141520_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;oh=11af731c0c6561bc26ec0c2e97cd399b&amp;oe=5E8BBB31&quot;,&quot;320&quot;:&quot;https:\/\/scontent.cdninstagram.com\/v\/t51.2885-15\/e35\/p320x320\/77174546_568678197008911_1452491329564141520_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;oh=b47b99cb2535d375cf855cdba81005f6&amp;oe=5E7DEE57&quot;,&quot;640&quot;:&quot;https:\/\/scontent.cdninstagram.com\/v\/t51.2885-15\/sh0.08\/e35\/p640x640\/77174546_568678197008911_1452491329564141520_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;oh=9cdab3f0e63e4796037c5efb7bdedcd3&amp;oe=5E852700&quot;}" style="height: 222px; background-image: url(&quot;https://mariannan.com/wp-content/uploads/sb-instagram-feed-images/2177737236269777895_6540931low.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><br>
            <span class="sbi-screenreader">Instagram post 2177737236269777895_6540931</span><br>
            	                    <img src="https://mariannan.com/wp-content/uploads/sb-instagram-feed-images/2177737236269777895_6540931low.jpg" alt="Gonna spend the weekend at home with my baby, putting christmas lights, watching movies and ordering takeaway 🖤 Happy weekend from us!" style="display: none;"><br>
        </a>
    </div>
</div>
-->
<!--Sexta foto-->
<!--
<div class="sbi_item sbi_type_carousel" id="sbi_2173402180218964453_6540931" data-date="1573309751">
<div class="sbi_photo_wrap">
        <a class="sbi_photo sbi_imgLiquid_bgSize sbi_imgLiquid_ready" href="https://www.instagram.com/p/B4pecSKAsnl/" target="_blank" rel="noopener noreferrer" data-full-res="https://scontent.cdninstagram.com/v/t51.2885-15/sh0.08/e35/p640x640/74601358_424642871784544_7696994280990203998_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;oh=89892746f6150d72c5cb69cfff1a048f&amp;oe=5E721344" data-img-src-set="{&quot;150&quot;:&quot;https:\/\/scontent.cdninstagram.com\/v\/t51.2885-15\/e35\/c0.135.1080.1080a\/s150x150\/74601358_424642871784544_7696994280990203998_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;oh=d6319b4807608d604cbdf277793ddaea&amp;oe=5E849775&quot;,&quot;320&quot;:&quot;https:\/\/scontent.cdninstagram.com\/v\/t51.2885-15\/e35\/p320x320\/74601358_424642871784544_7696994280990203998_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;oh=a14fa3e5e43fc80b73c42cb71b9e0f9a&amp;oe=5E672B13&quot;,&quot;640&quot;:&quot;https:\/\/scontent.cdninstagram.com\/v\/t51.2885-15\/sh0.08\/e35\/p640x640\/74601358_424642871784544_7696994280990203998_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;oh=89892746f6150d72c5cb69cfff1a048f&amp;oe=5E721344&quot;}" style="height: 222px; background-image: url(&quot;https://mariannan.com/wp-content/uploads/sb-instagram-feed-images/2173402180218964453_6540931low.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><br>
            <span class="sbi-screenreader">Instagram post 2173402180218964453_6540931</span><br>
            <svg class="svg-inline--fa fa-clone fa-w-16 sbi_lightbox_carousel_icon" aria-hidden="true" data-fa-proƒcessed="" data-prefix="far" data-icon="clone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
	                <path fill="currentColor" d="M464 0H144c-26.51 0-48 21.49-48 48v48H48c-26.51 0-48 21.49-48 48v320c0 26.51 21.49 48 48 48h320c26.51 0 48-21.49 48-48v-48h48c26.51 0 48-21.49 48-48V48c0-26.51-21.49-48-48-48zM362 464H54a6 6 0 0 1-6-6V150a6 6 0 0 1 6-6h42v224c0 26.51 21.49 48 48 48h224v42a6 6 0 0 1-6 6zm96-96H150a6 6 0 0 1-6-6V54a6 6 0 0 1 6-6h308a6 6 0 0 1 6 6v308a6 6 0 0 1-6 6z"></path>
	            </svg>	                    <img src="https://mariannan.com/wp-content/uploads/sb-instagram-feed-images/2173402180218964453_6540931low.jpg" alt="🤤💘" style="display: none;"><br>
        </a>
    </div>
</div></div>
-->
<div id="sbi_load">
<p>	        <a class="sbi_load_btn" href="javascript:void(0);"><br>
            <span class="sbi_btn_text">Load More…</span><br>
            <span class="sbi_loader sbi_hidden" style="background-color: rgb(255, 255, 255);"></span><br>
        </a>
</p>
</div>
<p>	    
	</p></div>
</div>
@endsection


    </div><!-- Instagram Feed JS -->

</body>
</html>




