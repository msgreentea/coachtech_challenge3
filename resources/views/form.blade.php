@extends('layout')


@section('title')
    お問い合わせ
@endsection

@section('content')
<form action="{{ route('add') }}" method="get">
  <table>
    <tr>
      <th>お名前<span>※</span></th>
      <td><input type="text" name="name"></td>
    </tr>
    <tr>
      <th>性別<span>※</span></th>
      <td>
        <input type="radio" name="gender" value="">男性
        <input type="radio" name="gender" value="">女性
      </td>
    </tr>
    <tr>
      <th>メールアドレス<span>※</span></th>
      <td><input type="text" name="email"></td>
    </tr>
    <tr>
      <th>郵便番号<span>※</span></th>
      <td><input type="text" name="postcode"></td>
    </tr>
    <tr>
      <th>住所<span>※</span></th>
      <td><input type="text" name="address"></td>
    </tr>
    <tr>
      <th>建物<span>※</span></th>
      <td><input type="text" name="building_name"></td>
    </tr>
    <tr>
      <th>ご意見<span>※</span></th>
      <td><input type="text" name="opinion"></td>
    </tr>
  </table>
  <button>送信</button>
</form>
@endsection