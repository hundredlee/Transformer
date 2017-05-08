## For Example
```
use Illuminate\Database\Eloquent\Model;
use HundredLee\AbTransformer;

class AddressTransformer extends AbTransformer
{
    public function transformModel(Model $modelOrCollection)
    {
        return [
            'id' => $modelOrCollection->id,
            'name' => $modelOrCollection->name,
            'phone' => $modelOrCollection->phone,
            'province' => $modelOrCollection->province
        ];
    }

}
```