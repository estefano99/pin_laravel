<div class="col-12 mx-auto my-5">
    
    @if (session("status"))
    <div class="alert alert-success">
        {{session ("status")}}
    </div>
@endif
    <form action="route" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">name</label>
            <input
                type="text"
                class="form-control"
                id="name"
                placeholder="ingrese un nombre"
                name="name"
            />
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input
                type="email"
                class="form-control"
                id="email"
                placeholder="email"
                name="email"
            />
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">phone</label>
            <input
                type="phone"
                class="form-control"
                id="phone"
                placeholder="phone"
                name="phone"
            />
        </div>
         
        <div class="mb-3">
            <label for="message" class="form-label"> message </label>
            <textarea
                class="form-control"
                id="message"
                rows="3"
                name="message"
            ></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Enviar mensaje</button>
    </form>
</div>
</div>