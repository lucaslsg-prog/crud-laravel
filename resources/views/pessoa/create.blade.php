<h1>Formulário de Pessoa</h1>

<form action="/pessoas" method="post">
    @csrf
    <input type="text" placeholder="nome" name="nome" required>
    <input type="text" placeholder="telefone" name="telefone" required>
    <input type="text" placeholder="email" name="email" required>
    <button type="submit">Salvar</button>
</form>

<br>

<a href="/pessoa">Voltar</a>