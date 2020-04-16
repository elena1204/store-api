<h1>Your company has just added new product!</h1>
<p>Name: <strong>{{ $product->getName() }}</strong></p>
<p>Description: <strong>{{ $product->getDescription() }}</strong></p>
<p>Price: <strong>${{ $product->getPrice() }}</strong></p>
