@extends('layouts.master')

@section('title', 'Dashboard - Application')

@section('headerStyle')
    <link rel="stylesheet" media="screen, print" href="{{ url('back/css/datagrid/datatables/datatables.bundle.css') }}">
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    <style>
        #map { height: 600px; width: 100%; }
        h1 { text-align: center; }

      .signal-icon {
        display: inline-flex;
        height: 32px;
        align-items: flex-end;
      }
      
      .signal-icon .bar {
        width: 6px;
        background-color: #d1d3e2;
        margin-right: 3px;
      }
      
      .signal-icon .bar-1 {
        height: 8px;
        animation: signal-anim 1.5s infinite;
      }
      
      .signal-icon .bar-2 {
        height: 16px;
        animation: signal-anim 1.5s infinite 0.25s;
      }
      
      .signal-icon .bar-3 {
        height: 24px;
        animation: signal-anim 1.5s infinite 0.5s;
      }
      
      .signal-icon .bar-4 {
        height: 32px;
        animation: signal-anim 1.5s infinite 0.75s;
      }
      
      @keyframes signal-anim {
        0%, 100% { opacity: 0.3; }
        50% { opacity: 1; }
      }

    </style>
@stop

@section('content')

<main id="js-page-content" role="main" class="page-content">
    @can('dashboard')
    <div class="subheader">
        <h1 class="subheader-title">
            <i class='subheader-icon fal fa-chart-area'></i> Dashboard </span>
        </h1>

    </div>

        <div class="row">
          <!-- Users Signed Up Card -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                      Customers Signed Up</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $usersSignedUp }}</div>
                  </div>
                  <div class="col-auto">
                    <div class="user-icon-container">
                      <i class="fal fa-user fa-2x text-gray-300"></i>
                      <span class="user-animation-circle"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <style>
            .user-icon-container {
              position: relative;
              display: inline-block;
            }
            
            .user-icon-container i {
              position: relative;
              z-index: 2;
              animation: userBounce 2s ease infinite;
            }
            
            @keyframes userBounce {
              0%, 100% { transform: translateY(0); }
              50% { transform: translateY(-5px); }
            }
            
            .user-animation-circle {
              position: absolute;
              top: 50%;
              left: 50%;
              transform: translate(-50%, -50%);
              width: 40px;
              height: 40px;
              border-radius: 50%;
              background: rgba(66, 133, 244, 0.1);
              z-index: 1;
              animation: userPulse 2s ease infinite;
            }
            
            @keyframes userPulse {
              0% { transform: translate(-50%, -50%) scale(0.5); opacity: 0; }
              50% { transform: translate(-50%, -50%) scale(1.2); opacity: 0.5; }
              100% { transform: translate(-50%, -50%) scale(1.8); opacity: 0; }
            }
          </style>
      
          <!-- Online Users Card -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                      Online Users</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $onlineUsersCount }}</div>
                  </div>
                  <div class="col-auto">
                    <div class="signal-icon">
                      <span class="bar bar-1"></span>
                      <span class="bar bar-2"></span>
                      <span class="bar bar-3"></span>
                      <span class="bar bar-4"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      
          <!-- Earnings Card -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                      Subscription Earnings</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $visualIndexFigure }}</div>
                  </div>
                  <div class="col-auto">
                    <i class="fal fa-gem fa-2x text-gray-300 gem-animation"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <style>
            .gem-animation {
              animation: gem-shine 2s ease-in-out infinite;
            }
            
            @keyframes gem-shine {
              0% { opacity: 0.7; transform: scale(1); }
              50% { opacity: 1; transform: scale(1.2); color: #ffc107; }
              100% { opacity: 0.7; transform: scale(1); }
            }
          </style>
      
          <!-- Influencers Card -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                      Influencers Signed Up</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $offsetBalance }}</div>
                  </div>
                  <div class="col-auto">
                    <i class="fal fa-lightbulb fa-2x lightbulb-glow"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <style>
            .lightbulb-glow {
              animation: bulbGlow 2s ease-in-out infinite;
              position: relative;
            }
            
            @keyframes bulbGlow {
              0%, 100% { 
                color: #d1d3e2;
                text-shadow: none;
              }
              50% { 
                color: #ffeb3b;
                text-shadow: 0 0 10px #ffeb3b, 0 0 20px #ffeb3b, 0 0 30px #ffeb3b;
              }
            }
            
            .lightbulb-glow::after {
              content: '';
              position: absolute;
              top: -10px;
              left: -10px;
              right: -10px;
              bottom: -10px;
              border-radius: 50%;
              background: radial-gradient(circle, rgba(255,235,59,0.2) 0%, rgba(255,235,59,0) 70%);
              opacity: 0;
              animation: glowPulse 2s ease-in-out infinite;
              z-index: -1;
            }
            
            @keyframes glowPulse {
              0%, 100% { opacity: 0; transform: scale(0.8); }
              50% { opacity: 1; transform: scale(1); }
            }
          </style>
      
          <!-- Paid Users Card -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                      Paid Users</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $productIncrease }}</div>
                  </div>
                  <div class="col-auto">
                    <i class="fal fa-globe fa-2x text-gray-300 fa-spin"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

    <div class="row">
        <div class="col-lg-12">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>
                        User Sign Up
                    </h2>
                </div>
                <div class="panel-container show">
                    <div class="panel-content bg-subtlelight-fade">
                        <div id="js-checkbox-toggles" class="mb-3 d-flex">
                        
                        </div>
                        <div id="flot-toggles" class="mt-4 w-100" style="height: 300px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Users Location
                    </h2>
                </div>
                <div class="col-md-12 map-container">
                    <div id="map"></div>
                  </div>
            </div>
        </div>
    </div>

    @endcan

@stop

@section('footerScript')

@stop
