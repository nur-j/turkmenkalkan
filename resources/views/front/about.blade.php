@extends('front.layout')

@section('content')
  <div class="container about__page pt-5">
    @php $locale = session('locale'); @endphp


    @switch($locale)
      @case('tm')
        <div>
          <h2>«Türkmen-Kalkan» türkmen-türk bilelikdäki aýakgap kärhanasy</h2>
          <p>«Türkmen-Kalkan» türkmen-türk bilelikdäki aýakgap kärhanasy, Türkenistanyň Dokma senagaty ministrligine degişli bolup, Türkmenistanyň Prezidentiniň 1997-nji ýylyň 22-nji ýanwaryndaky PB-1396 belgili buýrugy esasynda, Hojalyk Jemgiýeti görnüşinde döredilen.</p>
          <p>Kärhanada döredilen ýylyndan bäri Türkmenistanyň harby we hukuk goraýjy edraralarynyň sargydyna laýyklykda, şeýle-de raýatlar üçin sport we model, dürli görnüşdäki aýakgap önümleri öndürilýär.</p>
          <p>Aýakgap önümçiligine ýöriteleşen kärhanada dürli görnüşdäki aýakgaplary öndürmek üçin Russiýanyň, Çehiýanyň, Türkiýäniň we Germaniýanyň aýakgap enjamlary oturdylan.</p>
          <p>«Türkmen-Kalkan» aýakgap kärhanasy Ahal welaýatynyň Akbugdaý etrabynyň Änew şäherçesiniň  «Halklaryň dostlugy» köçesiniň 24-nji jaýynda ýerleşýär.</p>
          <p>Kärhana, raýatlar üçin sport we model, dürli görnüşdäki öndürilen aýakgap önümlerini  Aşgabat şäheriň Oguzhan köçesiniň 3-nji jaý salgysynda ýerleşýän kärhana degişli bolan «TG aýakap» söwda dükanlarynda şeýle hem, ýurdumyzyň beýleki welaýatlarynda giňişleýin söwdany ösdürmek maksady bilen internediň üsti bilen söwda amala aşyrmak, internet-onlaýyn hyzmatynyň satylmagy-da ýola goýulan.</p>
          <p>Kärhana aýakgap önürmeklik üçin Marynyň hem-de Gökdepe gön zawodlarynyň gön çig mallary bilen, şeýle hem galan çig mallaryny Türkmenistanyň Dokma Senagaty ministrligine degişli bolan «Türkmendokma» DSK-sy tarapyndan üpjün edilýär.</p>
        </div>
        @break
      @case('ru')
        <div>
          <h2>Совместное туркмено-турецкое обувное предприятие  «Türkmen-Kalkan»</h2>
          <p>Совместное туркмено-турецкое обувное предприятие «Türkmen-Kalkan» Министерства текстильной промышленности Туркменистана была основана в форме хозяйственного общества на основании Распоряжения Президента Туркменистана от 22 января 1997 года № PB -1396.</p>
          <p>С момента основания предприятие производит продукцию в соответствии с заказами военных и правоохранительных органов Туркменистана, а также различные виды спортивной и гражданской обуви.</p>
          <p>Совместное предприятие оснащена самым современным оборудованием из России, Чехии, Турции и Германии для производства обуви различных назначений и видов.</p>
          <p>Туркмено-турецкое обувное предприятие «Türkmen-Kalkan» находиться по адресу: г. Анау, ул. Дружбы народов, 24.</p>
          <p>Высококачественную обувную продукцию предприятия можно приобрести в специализированномторговом магазине «TG aýakap» по адресу г. Ашхабад, ул. Огуз хана, 3. Также, предприятием налажена система онлайн-покупок с целью расширения торговли в других регионах страны.</p>
          <p>Сырье для производства продукции поступает из Марыйского и Геокдепинского кожевенного завода, а также поставляется Внешнеторговым предприятием «Türkmendokma» Министерства текстильной промышленности Туркменистана.</p>
        </div>
        @break
      @case('en')
        <div>
          <h2>Joint Turkmen-Turkish shoe enterprise "Türkmen-Kalkan"</h2>
          <p>The joint Turkmen-Turkish shoe enterprise "Türkmen-Kalkan" of the Ministry of Textile Industry of Turkmenistan was founded in the form of an economic company on the basis of the Order of the President of Turkmenistan dated January 22, 1997 №. PB -1396.</p>
          <p>Since its foundation, the company has been producing products in accordance with the orders of the military and law enforcement agencies of Turkmenistan, and also various types of sports and civilian shoes.</p>
          <p>The joint venture is equipped with the most modern equipment from Russia, the Czech Republic, Turkey and Germany for the production of footwear for various purposes and types.</p>
          <p>The Turkmen-Turkish shoe enterprise "Türkmen-Kalkan" is located at the address: Anau, street Friendship of peoples, 24.</p>
          <p>High-quality footwear products of the enterprise can be purchased at the specialized trade store "TG aýakap" at the address Ashgabat, street Oguz Hana, 3. Also, the company has established an online shopping system in order to expand trade in other regions of the country.</p>
          <p>Raw materials for the production of products come from the Mary and Geokdepe tanneries, and are also supplied by the “Turkmendokma” Foreign Trade Enterprise of the Ministry of Textile Industry of Turkmenistan.</p>
        </div>
        @break
      @default
        <div>
        <h2>«Türkmen-Kalkan» türkmen-türk bilelikdäki aýakgap kärhanasy</h2>
        <p>«Türkmen-Kalkan» türkmen-türk bilelikdäki aýakgap kärhanasy, Türkenistanyň Dokma senagaty ministrligine degişli bolup, Türkmenistanyň Prezidentiniň 1997-nji ýylyň 22-nji ýanwaryndaky PB-1396 belgili buýrugy esasynda, Hojalyk Jemgiýeti görnüşinde döredilen.</p>
        <p>Kärhanada döredilen ýylyndan bäri Türkmenistanyň harby we hukuk goraýjy edraralarynyň sargydyna laýyklykda, şeýle-de raýatlar üçin sport we model, dürli görnüşdäki aýakgap önümleri öndürilýär.</p>
        <p>Aýakgap önümçiligine ýöriteleşen kärhanada dürli görnüşdäki aýakgaplary öndürmek üçin Russiýanyň, Çehiýanyň, Türkiýäniň we Germaniýanyň aýakgap enjamlary oturdylan.</p>
        <p>«Türkmen-Kalkan» aýakgap kärhanasy Ahal welaýatynyň Akbugdaý etrabynyň Änew şäherçesiniň  «Halklaryň dostlugy» köçesiniň 24-nji jaýynda ýerleşýär.</p>
        <p>Kärhana, raýatlar üçin sport we model, dürli görnüşdäki öndürilen aýakgap önümlerini  Aşgabat şäheriň Oguzhan köçesiniň 3-nji jaý salgysynda ýerleşýän kärhana degişli bolan «TG aýakap» söwda dükanlarynda şeýle hem, ýurdumyzyň beýleki welaýatlarynda giňişleýin söwdany ösdürmek maksady bilen internediň üsti bilen söwda amala aşyrmak, internet-onlaýyn hyzmatynyň satylmagy-da ýola goýulan.</p>
        <p>Kärhana aýakgap önürmeklik üçin Marynyň hem-de Gökdepe gön zawodlarynyň gön çig mallary bilen, şeýle hem galan çig mallaryny Türkmenistanyň Dokma Senagaty ministrligine degişli bolan «Türkmendokma» DSK-sy tarapyndan üpjün edilýär.</p>
        </div>
    @endswitch
    

  </div>

@endsection