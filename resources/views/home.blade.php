<x-template judul="Home">
  <br><br><br>
    <h1>nyari apa?</h1>
    <br>
      <button onclick="showTextAndPlayMusic()">cari</button>
      <br><br>
      <h1 id="result"></h1>
      <audio id="audio" src="{{ asset('storage/bootstrap-5.3.3/msc/sad.mp3') }}"></audio>
</x-template>



<script>
  function showTextAndPlayMusic() {
  let result = document.getElementById('result');
  result.textContent = 'nyari tempat buat cerita hal-hal kecil';

  let audio = document.getElementById('audio');
  audio.play();
}
</script>


