@extends('layout.layout')

@section('title','home')

@section('conteudo')



 <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcrumb-bg.png') }}">
   <!-- bg animated image/ -->
   <div class="container">
       <div class="row">
           <div class="col-lg-12">
               <div class="breadcumb-content">
                   <h1 class="breadcumb-title">Zumba</h1>
                   <ul class="breadcumb-menu">
                       <li><a href="{{ url('/') }}">HOME</a></li>
                       <li class="active">Zumba </li>
                   </ul>
               </div>
           </div>
       </div>

   </div>
</div>

<div class="service-details-area space-top space-extra-bottom overflow-hidden">
   <div class="container">
       <div class="row">
           <div class="col-xxl-8 col-lg-7">
               <div class="service-page-single">
                   <div class="page-img mb-50">
                       <img src="{{ asset('assets/img/zumba.png') }}" alt="img">
                   </div>
                   <div class="page-content">
                       <h2 class="page-title">Zumba</h2>
                       <p class="mb-50">A Zumba é, essencialmente, uma aula de fitness aeróbico. Os movimentos rápidos e coreografias envolventes aumentam a frequência cardíaca, promovendo a queima de calorias, melhora da resistência cardiovascular e fortalecimento muscular.</p>
                       <h3 class="page-subtitle mb-0">Porque escolher-nos?</h3>
                       <p>Existem vários motivos pelos quais você deve nos escolher:</p>
                       <div class="row">
                           <div class="col-sm-6">
                               <div class="service-wrap">
                                   <h6><i class="far fa-check me-2"></i> Diversificada gama de serviços:</h6>
                                   <p>Oferecemos uma ampla gama de serviços e programas de condicionamento físico para atender a diferentes níveis, interesses e objetivos de condicionamento físico.
                               </div>
                           </div>
                           <div class="col-sm-6">
                               <div class="service-wrap">
                                   <h6><i class="far fa-check me-2"></i> Conhecimento e experiência:</h6>
                                   <p>Contamos com uma equipe de profissionais de fitness altamente qualificados e experientes que se dedicam a ajudá-lo...</p>
                               </div>
                           </div>
                       </div>
                       <p class="mt-25 mb-50">Oferecemos uma ampla gama de serviços e programas de condicionamento físico para atender a diferentes níveis, interesses e objetivos de condicionamento físico. Quer procure treino pessoal, aulas de fitness em grupo, treinos especializados ou orientação nutricional, temos opções que se adaptam às suas necessidades.</p>
                       <h3 class="page-subtitle mb-0">Porque escolher-nos?</h3>
                       <div class="service-page-list checklist mb-50" data-bg-src="{{ asset('assets/img/normal/service-details1-2.png') }}">
                           <ul>
                               <li><i class="far fa-check-circle"></i>Projetar programa de treino.</li>
                               <li><i class="far fa-check-circle"></i>Sobrecarga progressiva.</li>
                               <li><i class="far fa-check-circle"></i>Concentre-se na forma adequada.</li>
                               <li><i class="far fa-check-circle"></i>Seja consistente com o treinamento.</li>
                               <li><i class="far fa-check-circle"></i>Ajuste a ingestão de calorias conforme necessário</li>
                           </ul>
                       </div>
                       <div class="accordion-area mb-30 accordion" id="faqAccordion">

                           <div class="accordion-card style2 active">
                               <div class="accordion-header" id="collapse-item-1">
                                   <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1"> Qual é o horário de funcionamento da sua academia? </button>
                               </div>
                               <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                   <div class="accordion-body">
                                       <p class="faq-text">Comunique progressivamente o capital humano flexível com os melhores esquemas. Desenvolva completamente infraestruturas 2.0 por meio de oportunidades de ponta. Inicie completamente habilidades de liderança de classe mundial por meio de aplicativos totalmente testados.
                                 ​ </p>
                                   </div>
                               </div>
                           </div>


                           <div class="accordion-card style2">
                               <div class="accordion-header" id="collapse-item-2">
                                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2"> Que comodidades e instalações sua academia oferece?</button>
                               </div>
                               <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                   <div class="accordion-body">
                                       <p class="faq-text">Comunique progressivamente o capital humano flexível com os melhores esquemas. Desenvolva completamente infraestruturas 2.0 por meio de oportunidades de ponta. Inicie completamente habilidades de liderança de classe mundial por meio de aplicativos totalmente testados. </p>
                                   </div>
                               </div>
                           </div>


                           <div class="accordion-card style2">
                               <div class="accordion-header" id="collapse-item-3">
                                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3"> Você fornece serviços de treinamento pessoal?</button>
                               </div>
                               <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                   <div class="accordion-body">
                                       <p class="faq-text">Comunique progressivamente o capital humano flexível com os melhores esquemas. Desenvolva completamente infraestruturas 2.0 por meio de oportunidades de ponta. Inicie completamente habilidades de liderança de classe mundial por meio de aplicativos totalmente testados. </p>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-xxl-4 col-lg-5">
               <aside class="sidebar-area">
                   <div class="widget widget_categories">
                       <h3 class="widget_title">All Services</h3>
                       <ul>
                           <li>
                               <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Gym Fitness Class</a>
                           </li>
                           <li>
                               <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Power Lifting Class</a>
                           </li>
                           <li>
                               <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Body Building</a>
                           </li>
                           <li>
                               <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Boxing Class</a>
                           </li>
                           <li>
                               <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Meditation Class</a>
                           </li>
                       </ul>
                   </div>
                   <div class="widget widget_schedule">
                       <h3 class="widget_title">Horário de Funcionamento</h3>
                       <ul>
                           <li>
                               <i class="far fa-clock"></i>
                               Segunda a Sexta: 1:00 – 2:00 pm
                           </li>
                           <li>
                               <i class="far fa-clock"></i>
                               Sábado: 8:00 – 12:00 pm
                           </li>
                           <li class="unavailable">
                               <i class="far fa-clock"></i>
                               Domingo: Fechado
                           </li>
                       </ul>
                   </div>
               </aside>
           </div>
       </div>
   </div>
</div>




@endsection



