<section class="mx-auto w-75 mt-5">
  <table class="table">
    <h2>total des membres hommes = {{ $total }}</h2>
      <thead>
        <tr>
          <th scope="col">Nom</th>
          <th scope="col">Genre</th>
          <th scope="col">Age</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($membres as $membre )
        <tr>
          <td>{{ $membre['nom'] }}</td>
          <td>{{ $membre['genre'] }}</td>
          <td>{{ $membre['age'] }}</td>
          <td class="d-flex justify-content-end">
            <form action="/delete/{{$membre->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
</section>