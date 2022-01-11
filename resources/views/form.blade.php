@extends('layout')


@section('css')
  <link rel="stylesheet" href="{{ asset('/css/form.css') }}">
@endsection


@section('title')
    お問い合わせ
@endsection


@section('content')
<form action="{{ route('confirm') }}" method="get">
  @csrf
  <table>
    {{-- name --}}
    <tr>
      <th>お名前<span>※</span></th>
      <td class="side">
        <input type="text" name="familyname" value="{{ old('familyname') }}">
        <input type="text" name="lastname" value="{{ old('lastname') }}">
      </td>
    </tr>
    <tr>
      <th></th>
      <td class="side">
        <div class="side-item">
          <p class="example">例）山田</p>
        </div>
        <div class="side-item">
          <p class="example">例）太郎</p>
        </div>
      </td>
    </tr>
    {{-- gender --}}
    <tr>
      <th>性別<span>※</span></th>
      <td>
        <label><input type="radio" name="gender" value="1" checked="checked">男性</label>
        <label><input type="radio" name="gender" value="2">女性</label>
      </td>
    </tr>
    {{-- email --}}
    <tr>
      <th>メールアドレス<span>※</span></th>
      <td><input type="text" name="email" value="{{ old('email') }}"></td>
    </tr>
    <tr>
      <th></th>
      <td>
        <p class="example">例）test@example.com</p>
      </td>
    </tr>
    {{-- postcode --}}
    <tr>
      <th>郵便番号<span>※</span></th>
      <td class="side">
        <div class="side-item">
          <p class="bold-text">〒</p>
        </div>
        <div class="side-item">
          <input type="text" name="postcode" value="{{ old('postcode') }}">
        </div>
      </td>
    </tr>
    <tr>
      <th></th>
      <td class="side">
        <p class="example">例）123-4567</p>
      </td>
    </tr>
    {{-- address --}}
    <tr>
      <th>住所<span>※</span></th>
      <td><input type="text" name="address" value="{{ old('address') }}"></td>
    </tr>
    <tr>
      <th></th>
      <td>
        <p class="example">例）東京都渋谷区千駄ヶ谷1-2-3</p>
      </td>
    </tr>
    {{-- building_name --}}
    <tr>
      <th>建物</th>
      <td><input type="text" name="building_name" value="{{ old('building_name') }}"</td>
    </tr>
    <tr>
      <th></th>
      <td>
        <p class="example">例）千駄ヶ谷マンション101</p>
      </td>
    </tr>
    {{-- opinion --}}
    <tr>
      <th>ご意見<span>※</span></th>
      <td><textarea name="opinion" id="" cols="30" rows="10" value="{{ old('opinion') }}"></textarea></td>
    </tr>
  </table>
  <button>送信</button>
</form>
@endsection