<form action="{{ route("product.store") }}" method="POST" >
    @csrf
    <div>
        <label for="name">Ten san pham:</label>
        <input type="text", name="name" id="name"> 
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div>
        <label for="picture1">Anh cua san pham 1:</label>
        <input type="file", name="picture1" id="picture1"> 
    </div>
    <div>
        <label for="picture2">Anh cua san pham 2:</label>
        <input type="file", name="picture2" id="picture2"> 
    </div>
    <div>
        <label for="picture3">Anh cua san pham 3:</label>
        <input type="file", name="picture3" id="picture3"> 
    </div>
    <div>
        <label for="picture4">Anh cua san pham 4:</label>
        <input type="file", name="picture4" id="picture4">  
    </div>
    <div>
        <label for="quantity">So luong san pham: </label>
        <input type="text", name="quantity" id="quantity"> 
    </div>
    <div>
        <label for="description">Mo ta san pham: </label>
        <textarea cols="25", rows="8", name="description" id="description"></textarea>
        @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div>
        <label for="price">Gia tien san pham: </label>
        <input type="text", name="price" id="price"> 
    </div>
    <div>
        <button type="submit">Them san pham</button>
    </div>
</form>