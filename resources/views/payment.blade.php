@extends('layouts.magazine')
@section('content')
<div class="row">
<h1>О нас</h1>
<p>Оплата и доставка для юридических лиц:

        Вы можете выслать нам свои реквизиты с запросом товарных позиций на sale@optobaza.ru или на факс 329-11-79,  счёт будет сформирован максимально оперативно - от 10 до 30 минут. Минимальная сумма заказа – 2000р!
        
        Наши реквизиты:            
        
        Общество с ограниченной ответственностью «Цель» (ООО «Цель»)
        Юридический адрес: 198035, г. Санкт-Петербург , ул. Невельская ,дом № 8, лит.А
        ИНН 7805530363 КПП 780501001
        Р/сч. 40702810400000024431 в ОАО «БАЛТИНВЕСТБАНК» г. Санкт-Петербург
        К/сч. 30101810500000000705 БИК 044030705
        ОКПО 67493495, ОКВЭД 51.4, ОКАТО 40276567000
        ОГРН 1107847298976
        
        После поступления заявки и выставления оператором счёта, товар резервируется на 5 рабочих дней. В момент поступления денег на расчетный счет, заказ поступает в сборку. Отгрузка возможна как при полной комплектации, так и частями, в зависимости от необходимости. Срок действия выставленного счета составляет 3 (три) рабочих дня.
        
        Оплаченные позиции можно забрать в пункте выдачи, по адресу: ул. Магнитогорская 51 лит. Ж, офис 342 (ст. м. Ладожская).
        
        При заказе от 5000р, действует курьерская доставка, стоимость доставки от 500 до 1000р в пределах г. Санкт-Петербург (о точных сроках и стоимости уточняйте у оператора!).
        
        доставка осуществляется в течении 1-5 рабочих дней (при наличии товара на складе) и не может быть выполнена в день оплаты товара.
        
        Так же осуществляется поставка транспортом компаний-перевозчиков.
        
        Принимаются только БЕЗНАЛИЧНЫЕ платежи!
        
        В случае если в заказ попали позиции, резервы которых превышают наличие на складе, либо в заказ внесен товар, которого на момент заказа нет в наличии - наши менеджеры свяжутся с Вами и уточнят возможность и сроки поставки интересующего Вас товара.
        
        Получение заказа так же по адресу: ул. Магнитогорская 51 лит. Ж, офис 342 (ст. м. Ладожская).
        
        По всем вопросам ждём ваших звонков по номеру: 329-11-79</p>
</div>
@endsection
@section('breadcrumbs')
<nav class="bread">
    <div class="nav-wrapper">
    <div class="container">
        <div class="col s12">
            <a href="#!" class="breadcrumb">First</a>
            <a href="#!" class="breadcrumb">Second</a>
            <a href="#!" class="breadcrumb">Third</a>
        </div>
    </div>
    </div>
  </nav>   
@endsection
@section('sidebar')
<h1>Новости</h1>
<div class="row">
<ul class="collection news">
    <li class="collection-item avatar">
      <img src="images/yuna.jpg" alt="" class="circle">
      <span class="title">Title</span>
      <p>First Line <br>
         Second Line
      </p>
      <a href="#!" class="secondary-content">06.11.2018</a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle">folder</i>
      <span class="title">Title</span>
      <p>First Line <br>
         Second Line
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle green">insert_chart</i>
      <span class="title">Title</span>
      <p>First Line <br>
         Second Line
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle red">play_arrow</i>
      <span class="title">Title</span>
      <p>First Line <br>
         Second Line
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
  </ul>
  </div>
@endsection
