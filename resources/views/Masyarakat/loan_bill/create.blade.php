@extends('dashboard2')
@section('content')
<div class="col-12 main peminjaman-modal">
    <div class="row">
        <h1 class="page-header text-center border-bottom-unset"><strong>PEMBAYARAN TAGIHAN PINJAMAN</strong></h1>
        <hr style="width:80%; border-top: 1px solid black;">
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
            <p class="h2 text-center"><strong>INPUT DATA DIRI</strong></p>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-lg-6">
            <form action="{{ route('masyarakat.bill.show', $loan_bill->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group @error('full_name') has-error @enderror">
                    <label for="full_name">Nama Lengkap</label>
                    <input type="text" name="full_name" id="full_name" placeholder="Enter nama lengkap" class="form-control" aria-describedby="errorBlock1" value="{{ old('full_name') }}" required>
                    @error('full_name')
                    <span id="errorBlock1" class="help-block">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group mt-2 @error('email') has-error @enderror">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter email" class="form-control" aria-describedby="errorBlock2" value="{{ old('email') }}" required>
                    @error('email')
                    <span id="errorBlock2" class="help-block">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group mt-2 @error('phone') has-error @enderror">
                    <label for="phone">Nomor Handphone</label>
                    <input type="text" name="phone" id="phone" placeholder="Enter nomor handphone" class="form-control" aria-describedby="errorBlock3" value="{{ old('phone') }}" required>
                    @error('phone')
                    <span id="errorBlock3" class="help-block">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group mt-2 @error('payment_method') has-error @enderror">
                    <label for="payment_method">Metode Pembayaran</label>
                    <select name="payment_method" id="payment_method" class="form-control" required>
                        <option>Pilih metode pembayaran</option>
                        <option value="Transfer Bank">Transfer Bank</option>
                        <option value="Indomaret">Indomaret</option>
                        <option value="OVO">OVO</option>
                        <option value="DANA">DANA</option>
                    </select>
                    @error('payment_method')
                    <span id="errorBlock3" class="help-block">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group mt-2 @error('ammount') has-error @enderror">
                    <label for="ammount">Jumlah Bayar</label>
                    <input type="number" name="ammount" id="ammount" placeholder="Enter jumlah bayar" class="form-control" aria-describedby="errorBlock4" value="{{ old('ammount') }}" required>
                    @error('ammount')
                    <span id="errorBlock4" class="help-block">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group mt-2 @error('payment_proof') has-error @enderror">
                    <label for="payment_proof">Bukti Pembayaran</label>
                    <input type="file" name="payment_proof" id="payment_proof" required accept=".jpg,.png,.jpeg" class="form-control">
                    @error('payment_proof')
                    <span id="errorBlock5" class="help-block">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group-mt-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('masyarakat.bill.index') }}" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
