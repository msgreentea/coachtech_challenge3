@extends('layout')


@section('title')
    お問い合わせ
@endsection

@section('content')
<form action="{{ route('confirm') }}" method="get">
  <table>
    <tr>
      <th>お名前<span>※</span></th>
      <td>
        <input type="text" name="familyname" value="{{ old('familyname') }}">
        <input type="text" name="lastname" value="{{ old('lastname') }}">
      </td>
    </tr>
    <tr>
      <th>性別<span>※</span></th>
      <td>
        <input type="radio" name="gender" value="1">男性
        <input type="radio" name="gender" value="2">女性
      </td>
    </tr>
    <tr>
      <th>メールアドレス<span>※</span></th>
      <td><input type="text" name="email" value="{{ old('email') }}"></td>
    </tr>
    <tr>
      <th>郵便番号<span>※</span></th>
      <td><input type="text" name="postcode" value="{{ old('postcode') }}"></td>
    </tr>
    <tr>
      <th>住所<span>※</span></th>
      <td><input type="text" name="address" value="{{ old('address') }}"></td>
    </tr>
    <tr>
      <th>建物<span>※</span></th>
      <td><input type="text" name="building_name" value="{{ old('building_name') }}"</td>
    </tr>
    <tr>
      <th>ご意見<span>※</span></th>
      <td><input type="text" name="opinion" value="{{ old('opinion') }}"></td>
    </tr>
  </table>
  <button>送信</button>
</form>
@endsection