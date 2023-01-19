@extends('layouts.master')






@section('content')
<div class="master">
    
    <h2 class="master-header">Team NCT</h2>
    <p class="master-intro">Burası Team NCT'nin web sitesinin ana sayfasıdır</p>
    

    <div class="master-paragraph">
    Günümüzde dünya nüfusunun artması, yaşanan teknolojik gelişmeler , mekânsal alanların
kullanım potansiyellerindeki değişimler yapılaşma alanlarını artırmaktadır. Bu artış
beraberinde birtakım sorunlar ortaya çıkarmaktadır. Bu sorunlardan biri de yangınlardır.
Yangınlar, ülkemizde hem ekonomik olarak hem de insan sağlığı üzerinde ciddi etkiler
bırakmaktadır.Bu yüzden yangın anında ulaşım çok kritik bir süreçtir. Biz de TeamNCT ekibi
olarak bu soruna çözüm olarak sistemimiz yangının olduğu konumdan veriyi alarak kendi
ürettiğimiz dronelarımıza iletecektir . Bu sayede yangının şiddeti artmadan erken müdahale
edilebilecek ve ekonomik olarak katkı sağlayacaktır . Buna ek olarak sistemiz yine yangın ve
GPS sensörlerinden aldığı veriye göre caddelerin üzerindeki tabelalar sayesinde araçlara
yangın hakkında bilgilendirme yapacak ve olası bir trafik sorununu ortadan kaldıracaktır
    </div>
</div>
<div class="master-images">
    <img class="fire-ball" src="{{asset("images/fire-ball-nct.jpeg")}}" alt="ateş topu">
    <img class="drone" src="{{asset("images/drone-nct.jpeg")}}" alt="dron">
</div>
@endsection
