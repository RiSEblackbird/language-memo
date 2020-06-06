## CanvasにVRのレーザーポインターを対応させる
- シーンのルートに[Oculus]>[SampleFramework]>[Core]>[DebugUI]>[Prefabs]から"UIHelpers"をコピーする。
- コピーした"UIHelpers"で、[UIHelpers]>[EventSystem]のInspectorを開き、"OVR Input Module (Script)"において、"Joy Pad Click Button"に使用するコントローラに対応したキーを選択する！
  - レーザーポインターを表示するには、[UIHelpers]>[LaserPointer]のInspectorを開き、"Line Renderer"のチェックをONにする。