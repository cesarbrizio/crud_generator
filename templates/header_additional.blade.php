import { useState } from "react";

const ExpandableItem = props => {
  const [openCollapse, setOpenCollapse] = useState(false);

  return props.render({ openCollapse, setOpenCollapse });
};

export default ExpandableItem;
