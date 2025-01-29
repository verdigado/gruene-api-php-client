# # UserRbacGroup

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The group id. Contains the division id. |
**division_key** | **string** | Division key of the division this group represents. |
**parent_key** | **string** | Division key of the parent division if there is one. |
**implicit** | **bool** | Indicate if user has a direct or indirect membership in the division. A indrect membership can be inherited, eg user is member if a KV so the user is also member of the LV/KV, or if the user has a role of a division he is not part of. |
**name** | **string** | Name of the Group (division name) |
**display_name** | **string** | Descriptive name of the division. |
**hierarchy** | **string** | The root hierarchy the division belongs to |
**level** | **string** | Level in the hierarchy |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
