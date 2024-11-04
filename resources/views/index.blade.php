<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>アカウント一覧</title>
</head>

<body>
    <table>
        <tr>
            <th>氏名</th>
            <th>メールアドレス</th>
        </tr>
        @foreach ($accounts as $account)
          <tr>
              <td>{{ $account->name }}</td>
              <td>{{ $account->email }}</td>
          </tr>
        @endforeach
    </table>
</body>

</html>
<style>
    table {
        border: 1px solid #000;
    }
</style>
