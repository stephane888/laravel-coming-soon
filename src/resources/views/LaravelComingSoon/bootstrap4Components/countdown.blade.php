<div id="wbu-coundown" >
    <div class="conatainer-coundown">
    	<countdown date="2020-08-30 00:00:00"></countdown>
    </div>  
</div>


<template id="countdown-template">
  <div class="countdown">
    <div class="block">
      <p class="digit">@{{ days | two_digits }}</p>
      <p class="text">Days</p>
    </div>
    <div class="block">
      <p class="digit">@{{ hours | two_digits }}</p>
      <p class="text">Hours</p>
    </div>
    <div class="block">
      <p class="digit">@{{ minutes | two_digits }}</p>
      <p class="text">Minutes</p>
    </div>
    <div class="block">
      <p class="digit">@{{ seconds | two_digits }}</p>
      <p class="text">Seconds</p>
    </div>
  </div>
</template>
@push('scripts')
    <script src="{{ asset('LaravelComingSoon/js/countdown.js') }}"></script>
@endpush