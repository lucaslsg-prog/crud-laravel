
@if (isset($pessoa))
    <h1>Atualizar Dados de {{ $pessoa->nome }}</h1>
    <form action="/pessoas/{{ $pessoa->id }}" method="post">
    @method('PUT')
@else
    <h1>Formulário de Pessoa</h1>
    <form action="/pessoas" method="post">
@endif
    @csrf
    <input type="text" placeholder="nome" name="nome" value="{{ $pessoa->nome ?? '' }}" required>
    <input type="text" placeholder="telefone" name="telefone" value="{{ $pessoa->telefone ?? '' }}" required>
    <input type="text" placeholder="email" name="email" value="{{ $pessoa->email ?? '' }}" required>
    <button type="submit">Salvar</button>
</form>

<br>

<a href="/pessoa">Voltar</a>