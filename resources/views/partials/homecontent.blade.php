<section class="mx-auto w-75 mt-5">
  <button class="btn btn-warning mb-4"> <a href="{{ route ('create') }}" style="text-decoration: none; color:black">Ajouter &#10133;</a></button>
    <table class="table">
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