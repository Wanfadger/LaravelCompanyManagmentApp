<div class="form-group">
                <label for="name">name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{old('name') ?? $customer->name }}" placeholder="name" form-control-sm>
                <small id="email" class="form-text text-muted">{{$errors->first('name')}}</small>
            </div>
  
           

            <div class="form-group">
                <label for="email">Email </label>
                <input type="text" class="form-control form-control-sm" id="email" aria-describedby="email"
                value="{{old('email') ?? $customer->email }}"
                name="email"
                placeholder="enter email">
                <small id="email" class="form-text text-muted">{{$errors->first('email')}}</small>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="active" form-control-sm 
                value="{{old('active') ?? $customer->active}}" >
                    <option value="" class="muted" disabled>select </option>
                    <option value="1">active</option>
                    <option value="0">inactive</option>
                </select>
                <small id="active" class="form-text text-muted">{{$errors->first('active')}}</small>
            </div>

           
            <div class="form-group">
                <label for="status">select company</label>
                <select class="form-control" id="company" name="company_id" form-control-sm value="{{old('company')}}" >
                    <option value="" class="muted" active disabled>select a company </option>
                   @foreach($companies as $company)
                   <option value="{{$company->id}}">{{$company->name}}</option>
                   @endforeach
                </select>
                <small id="company" class="form-text text-muted">{{$errors->first('active')}}</small>
            </div>
            @csrf
 