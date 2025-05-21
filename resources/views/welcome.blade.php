<x-layout>
  <x-slot:title>
    Sveikiņiii
  </x-slot:title>

 <h1>Joki</h1>

  @foreach ($jokes as $joke)
    <div style="margin-bottom:20px; padding:10px; border:1px solid #ccc;">
      <h3>Kategorija: {{ $joke->type }}</h3>
      <p><strong>Jautājums:</strong> {{ $joke->setup }}</p>
      <p><strong>Atbilde:</strong> {{ $joke->punchline }}</p>
    </div>
  @endforeach  

</x-layout>
