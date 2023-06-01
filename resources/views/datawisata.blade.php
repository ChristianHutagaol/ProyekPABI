@extends('layouts.frontend')

@section('content')

<section>
    <div class="swiper-container gallery-top">
      <div class="swiper-wrapper">
        <!--========== ISLANDS 1 ==========-->
        <section class="islands swiper-slide">
          <img
            src="{{ asset('frontend/assets/img/travel3.jpeg') }}"
            alt=""
            class="islands__bg"
          />
          <div class="bg__overlay">
            <div class="islands__container container">
              <div class="islands__data">
                
                <h1 class="islands__title">Data Wisata</h1>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </section>

   
    


 
      <div class ="row">

 
  
  <tbody>
    @foreach($data as $index => $row)
    <tr>
      <th scope="row">{{$index + $data->firstitem()}}</th>
      <h1>{{$row->nama}}</h1>
      <td>
        <img src="{{ asset('fotowisata/'.$row->foto)}}" alt="" style="width:500px; height:500px">
      </td>
    
      <td>{{$row->deskripsi}}</td>
    

      <td>
      
    
      </td>
    </tr>
    @endforeach
    
    
  </tbody>

{{ $data ->links()}}
</div>
</div>

  